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

Creates a AdsCampaign. Provide the unified AdsCampaign fields in the request body; they are mapped to the provider's API. Returns the created AdsCampaign.

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
        endAt: Utils\Utils::parseDateTime('2025-06-02T08:12:06.694Z'),
        id: '7734a920-8b81-4528-ad2c-7f85f1886802',
        labels: [
            'comedo',
        ],
        metadata: [],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-21T12:38:38.281Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-01-03T05:09:59.570Z'),
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

Creates a MarketingCampaign. Provide the unified MarketingCampaign fields in the request body; they are mapped to the provider's API. Returns the created MarketingCampaign.

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
        createdAt: Utils\Utils::parseDateTime('2019-05-19T11:18:15.589Z'),
        fromEmail: 'graham.mertz@gmail.com',
        fromName: 'Graham Mertz',
        id: '407a1645-beda-4d0b-b5f2-36d4cfb30e0f',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-22T22:42:06.196Z'),
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

Retrieves a single AdsCampaign by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single MarketingCampaign by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of AdsCampaigns. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of MarketingCampaigns. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the AdsCampaign identified by `id`. Provide the unified AdsCampaign fields to change in the request body.

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
        endAt: Utils\Utils::parseDateTime('2025-06-02T08:12:06.805Z'),
        id: 'a9072f26-4981-4c59-a064-9f4778c74f87',
        labels: [
            'comedo',
        ],
        metadata: [],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-21T12:38:38.287Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-01-03T05:09:59.702Z'),
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

Updates the MarketingCampaign identified by `id`. Provide the unified MarketingCampaign fields to change in the request body.

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
        createdAt: Utils\Utils::parseDateTime('2019-05-19T11:18:15.589Z'),
        fromEmail: 'graham.mertz@gmail.com',
        fromName: 'Graham Mertz',
        id: '5a48f9a6-02f2-4b50-8a34-5bcc96b0d40a',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-22T22:42:06.204Z'),
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

Deletes the AdsCampaign identified by `id`.

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

Deletes the MarketingCampaign identified by `id`.

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

Updates the AdsCampaign identified by `id`. Provide the unified AdsCampaign fields to change in the request body.

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
        endAt: Utils\Utils::parseDateTime('2025-06-02T08:12:06.805Z'),
        id: 'a9072f26-4981-4c59-a064-9f4778c74f87',
        labels: [
            'comedo',
        ],
        metadata: [],
        name: 'Emard Inc',
        startAt: Utils\Utils::parseDateTime('2022-07-21T12:38:38.287Z'),
        status: Shared\AdsCampaignStatus::ProcessingFailed,
        targeting: new Shared\PropertyAdsCampaignTargeting(),
        totalSpendAmount: 2349.8642875347286,
        updatedAt: Utils\Utils::parseDateTime('2026-01-03T05:09:59.702Z'),
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

Updates the MarketingCampaign identified by `id`. Provide the unified MarketingCampaign fields to change in the request body.

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
        createdAt: Utils\Utils::parseDateTime('2019-05-19T11:18:15.589Z'),
        fromEmail: 'graham.mertz@gmail.com',
        fromName: 'Graham Mertz',
        id: '5a48f9a6-02f2-4b50-8a34-5bcc96b0d40a',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-22T22:42:06.204Z'),
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