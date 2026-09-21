# Campaign

## Overview

### Available Operations

* [createAdsCampaign](#createadscampaign) - Create a campaign
* [createMartechCampaign](#createmartechcampaign) - Create a campaign
* [getAdsCampaign](#getadscampaign) - Retrieve a campaign
* [getMartechCampaign](#getmartechcampaign) - Retrieve a campaign
* [listAdsCampaigns](#listadscampaigns) - List all campaigns
* [listMartechCampaigns](#listmartechcampaigns) - List all campaigns
* [patchAdsCampaign](#patchadscampaign) - Update a campaign
* [patchMartechCampaign](#patchmartechcampaign) - Update a campaign
* [removeAdsCampaign](#removeadscampaign) - Remove a campaign
* [removeMartechCampaign](#removemartechcampaign) - Remove a campaign
* [updateAdsCampaign](#updateadscampaign) - Update a campaign
* [updateMartechCampaign](#updatemartechcampaign) - Update a campaign

## createAdsCampaign

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCampaign" method="post" path="/ads/{connection_id}/campaign" example="ads_campaign" -->
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

$request = new Operations\CreateAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-05-11T06:21:14.490Z'),
        id: 'b4747a35-ecd8-4319-ba25-b3373551e152',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T07:23:51.198Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-07T20:33:47.550Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->campaign->createAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAdsCampaignRequest](../../Models/Operations/CreateAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAdsCampaignResponse](../../Models/Operations/CreateAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createMartechCampaign

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechCampaign" method="post" path="/martech/{connection_id}/campaign" example="martech_campaign" -->
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

$request = new Operations\CreateMartechCampaignRequest(
    marketingCampaign: new Shared\MarketingCampaign(
        createdAt: Utils\Utils::parseDateTime('2023-08-01T22:29:12.121Z'),
        fromEmail: 'Nick.Beahan@hotmail.com',
        fromName: 'Javier Rempel',
        id: '8c4ab3b1-d954-491f-8d4e-7588ea171cb5',
        listIds: [
            'bde5cab9-cf2f-4ed5-adab-b33c88bac5af',
        ],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Bellicus tener cinis causa cavus toties.',
        replyToEmail: 'Antwan.Abshire@hotmail.com',
        sendAt: Utils\Utils::parseDateTime('2023-03-28T12:33:25.052Z'),
        status: Shared\MarketingCampaignStatus::Sent,
        subjectLine: 'Depromo depulso turpis teres apparatus placeat ventus tolero cunctatio.',
        type: 'plaintext',
        updatedAt: Utils\Utils::parseDateTime('2023-12-17T22:11:31.702Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->campaign->createMartechCampaign(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateMartechCampaignRequest](../../Models/Operations/CreateMartechCampaignRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateMartechCampaignResponse](../../Models/Operations/CreateMartechCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCampaign

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCampaign" method="get" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetAdsCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->getAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAdsCampaignRequest](../../Models/Operations/GetAdsCampaignRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAdsCampaignResponse](../../Models/Operations/GetAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechCampaign

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechCampaign" method="get" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetMartechCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->getMartechCampaign(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetMartechCampaignRequest](../../Models/Operations/GetMartechCampaignRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetMartechCampaignResponse](../../Models/Operations/GetMartechCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCampaigns

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCampaigns" method="get" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\ListAdsCampaignsRequest(
    connectionId: '<id>',
);

$response = $sdk->campaign->listAdsCampaigns(
    request: $request
);

if ($response->adsCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAdsCampaignsRequest](../../Models/Operations/ListAdsCampaignsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAdsCampaignsResponse](../../Models/Operations/ListAdsCampaignsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechCampaigns

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechCampaigns" method="get" path="/martech/{connection_id}/campaign" -->
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

$request = new Operations\ListMartechCampaignsRequest(
    connectionId: '<id>',
);

$response = $sdk->campaign->listMartechCampaigns(
    request: $request
);

if ($response->marketingCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListMartechCampaignsRequest](../../Models/Operations/ListMartechCampaignsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListMartechCampaignsResponse](../../Models/Operations/ListMartechCampaignsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsCampaign

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCampaign" method="patch" path="/ads/{connection_id}/campaign/{id}" example="ads_campaign" -->
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

$request = new Operations\PatchAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-05-11T06:21:14.608Z'),
        id: 'dc8b4b37-2f37-42b5-a68b-092606ed1f6a',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T07:23:51.204Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-07T20:33:47.691Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->patchAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAdsCampaignRequest](../../Models/Operations/PatchAdsCampaignRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAdsCampaignResponse](../../Models/Operations/PatchAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechCampaign

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechCampaign" method="patch" path="/martech/{connection_id}/campaign/{id}" example="martech_campaign" -->
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

$request = new Operations\PatchMartechCampaignRequest(
    marketingCampaign: new Shared\MarketingCampaign(
        createdAt: Utils\Utils::parseDateTime('2023-08-01T22:29:12.121Z'),
        fromEmail: 'Nick.Beahan@hotmail.com',
        fromName: 'Javier Rempel',
        id: '5ae40db3-8db7-4d5f-94eb-165f36e359e5',
        listIds: [
            'bde5cab9-cf2f-4ed5-adab-b33c88bac5af',
        ],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Bellicus tener cinis causa cavus toties.',
        replyToEmail: 'Antwan.Abshire@hotmail.com',
        sendAt: Utils\Utils::parseDateTime('2023-03-28T12:33:25.052Z'),
        status: Shared\MarketingCampaignStatus::Sent,
        subjectLine: 'Depromo depulso turpis teres apparatus placeat ventus tolero cunctatio.',
        type: 'plaintext',
        updatedAt: Utils\Utils::parseDateTime('2023-12-17T22:11:31.702Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->patchMartechCampaign(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchMartechCampaignRequest](../../Models/Operations/PatchMartechCampaignRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchMartechCampaignResponse](../../Models/Operations/PatchMartechCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsCampaign

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCampaign" method="delete" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveAdsCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->removeAdsCampaign(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAdsCampaignRequest](../../Models/Operations/RemoveAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAdsCampaignResponse](../../Models/Operations/RemoveAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechCampaign

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechCampaign" method="delete" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveMartechCampaignRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->removeMartechCampaign(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveMartechCampaignRequest](../../Models/Operations/RemoveMartechCampaignRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveMartechCampaignResponse](../../Models/Operations/RemoveMartechCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsCampaign

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCampaign" method="put" path="/ads/{connection_id}/campaign/{id}" example="ads_campaign" -->
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

$request = new Operations\UpdateAdsCampaignRequest(
    adsCampaign: new Shared\AdsCampaign(
        budgetAmount: 8743.179536121897,
        budgetPeriod: Shared\BudgetPeriod::Monthly,
        category: 'CREDIT',
        createdAt: Utils\Utils::parseDateTime('2022-05-21T08:51:41.868Z'),
        currency: 'USD',
        effectiveStatus: Shared\EffectiveStatus::NotEligible,
        endAt: Utils\Utils::parseDateTime('2025-05-11T06:21:14.608Z'),
        id: 'dc8b4b37-2f37-42b5-a68b-092606ed1f6a',
        labels: [
            'comedo',
        ],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-20T07:23:51.204Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2025-12-07T20:33:47.691Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->updateAdsCampaign(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAdsCampaignRequest](../../Models/Operations/UpdateAdsCampaignRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAdsCampaignResponse](../../Models/Operations/UpdateAdsCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechCampaign

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechCampaign" method="put" path="/martech/{connection_id}/campaign/{id}" example="martech_campaign" -->
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

$request = new Operations\UpdateMartechCampaignRequest(
    marketingCampaign: new Shared\MarketingCampaign(
        createdAt: Utils\Utils::parseDateTime('2023-08-01T22:29:12.121Z'),
        fromEmail: 'Nick.Beahan@hotmail.com',
        fromName: 'Javier Rempel',
        id: '5ae40db3-8db7-4d5f-94eb-165f36e359e5',
        listIds: [
            'bde5cab9-cf2f-4ed5-adab-b33c88bac5af',
        ],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Bellicus tener cinis causa cavus toties.',
        replyToEmail: 'Antwan.Abshire@hotmail.com',
        sendAt: Utils\Utils::parseDateTime('2023-03-28T12:33:25.052Z'),
        status: Shared\MarketingCampaignStatus::Sent,
        subjectLine: 'Depromo depulso turpis teres apparatus placeat ventus tolero cunctatio.',
        type: 'plaintext',
        updatedAt: Utils\Utils::parseDateTime('2023-12-17T22:11:31.702Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->updateMartechCampaign(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateMartechCampaignRequest](../../Models/Operations/UpdateMartechCampaignRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateMartechCampaignResponse](../../Models/Operations/UpdateMartechCampaignResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |