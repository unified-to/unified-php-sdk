# Martech

## Overview

### Available Operations

* [createMartechCampaign](#createmartechcampaign) - Create a campaign
* [createMartechList](#createmartechlist) - Create a list
* [createMartechMember](#createmartechmember) - Create a member
* [getMartechCampaign](#getmartechcampaign) - Retrieve a campaign
* [getMartechList](#getmartechlist) - Retrieve a list
* [getMartechMember](#getmartechmember) - Retrieve a member
* [listMartechCampaigns](#listmartechcampaigns) - List all campaigns
* [listMartechLists](#listmartechlists) - List all lists
* [listMartechMembers](#listmartechmembers) - List all members
* [listMartechReports](#listmartechreports) - List all reports
* [patchMartechCampaign](#patchmartechcampaign) - Update a campaign
* [patchMartechList](#patchmartechlist) - Update a list
* [patchMartechMember](#patchmartechmember) - Update a member
* [removeMartechCampaign](#removemartechcampaign) - Remove a campaign
* [removeMartechList](#removemartechlist) - Remove a list
* [removeMartechMember](#removemartechmember) - Remove a member
* [updateMartechCampaign](#updatemartechcampaign) - Update a campaign
* [updateMartechList](#updatemartechlist) - Update a list
* [updateMartechMember](#updatemartechmember) - Update a member

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
        id: 'fad11ace-8f2e-49d5-95e0-d5ea099dc435',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-23T07:20:29.581Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechCampaign(
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

## createMartechList

Creates a MarketingList. Provide the unified MarketingList fields in the request body; they are mapped to the provider's API. Returns the created MarketingList.

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechList" method="post" path="/martech/{connection_id}/list" example="martech_list" -->
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

$request = new Operations\CreateMartechListRequest(
    marketingList: new Shared\MarketingList(
        address: new Shared\PropertyMarketingListAddress(
            address1: '76564 Coronation Road',
            address2: 'Suite 922',
            city: 'West Jordon',
            country: 'Mexico',
            postalCode: '04183',
            region: 'NC',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Vilis.',
        id: '40de5c7d-0e49-4e6a-a33f-1f33a5325cad',
        isActive: true,
        language: 'ru',
        metadata: [],
        name: 'Electronics Newsletter',
        senderCompany: 'Koepp and Sons',
        senderEmail: 'blake.kuhn@hotmail.com',
        senderName: 'Blake Kuhn',
        senderPhone: '359.305.7962 x28115',
        subject: 'Theca caecus copia crebro valeo ulciscor.',
        updatedAt: Utils\Utils::parseDateTime('2022-09-14T14:58:24.238Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechList(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateMartechListRequest](../../Models/Operations/CreateMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateMartechListResponse](../../Models/Operations/CreateMartechListResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createMartechMember

Creates a MarketingMember. Provide the unified MarketingMember fields in the request body; they are mapped to the provider's API. Returns the created MarketingMember.

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechMember" method="post" path="/martech/{connection_id}/member" example="martech_member" -->
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

$request = new Operations\CreateMartechMemberRequest(
    marketingMember: new Shared\MarketingMember(
        company: 'Miller - Franecki',
        createdAt: Utils\Utils::parseDateTime('2022-04-15T15:32:38.496Z'),
        emails: [
            new Shared\MarketingEmail(
                email: 'jude.leffler@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
        ],
        firstName: 'Jude',
        id: 'a753e1a4-5cb3-4051-b741-f335077b2b96',
        lastName: 'Leffler',
        metadata: [],
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'adnuo',
            'verumtamen',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-10T20:49:37.981Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechMember(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateMartechMemberRequest](../../Models/Operations/CreateMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateMartechMemberResponse](../../Models/Operations/CreateMartechMemberResponse.md)**

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

$response = $sdk->martech->getMartechCampaign(
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

## getMartechList

Retrieves a single MarketingList by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechList" method="get" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\GetMartechListRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->getMartechList(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetMartechListRequest](../../Models/Operations/GetMartechListRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetMartechListResponse](../../Models/Operations/GetMartechListResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechMember

Retrieves a single MarketingMember by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechMember" method="get" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\GetMartechMemberRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->getMartechMember(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetMartechMemberRequest](../../Models/Operations/GetMartechMemberRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetMartechMemberResponse](../../Models/Operations/GetMartechMemberResponse.md)**

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

$response = $sdk->martech->listMartechCampaigns(
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

## listMartechLists

Returns a list of MarketingLists. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechLists" method="get" path="/martech/{connection_id}/list" -->
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

$request = new Operations\ListMartechListsRequest(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechLists(
    request: $request
);

if ($response->marketingLists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListMartechListsRequest](../../Models/Operations/ListMartechListsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListMartechListsResponse](../../Models/Operations/ListMartechListsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechMembers

Returns a list of MarketingMembers. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechMembers" method="get" path="/martech/{connection_id}/member" -->
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

$request = new Operations\ListMartechMembersRequest(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechMembers(
    request: $request
);

if ($response->marketingMembers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListMartechMembersRequest](../../Models/Operations/ListMartechMembersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListMartechMembersResponse](../../Models/Operations/ListMartechMembersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechReports

Returns a list of MarketingReports. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechReports" method="get" path="/martech/{connection_id}/report" -->
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

$request = new Operations\ListMartechReportsRequest(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechReports(
    request: $request
);

if ($response->marketingReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListMartechReportsRequest](../../Models/Operations/ListMartechReportsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListMartechReportsResponse](../../Models/Operations/ListMartechReportsResponse.md)**

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
        id: 'eb611f62-1e78-4ab8-8716-cad17b5c8ccb',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-23T07:20:29.588Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechCampaign(
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

## patchMartechList

Updates the MarketingList identified by `id`. Provide the unified MarketingList fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechList" method="patch" path="/martech/{connection_id}/list/{id}" example="martech_list" -->
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

$request = new Operations\PatchMartechListRequest(
    marketingList: new Shared\MarketingList(
        address: new Shared\PropertyMarketingListAddress(
            address1: '76564 Coronation Road',
            address2: 'Suite 922',
            city: 'West Jordon',
            country: 'Mexico',
            postalCode: '04183',
            region: 'NC',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Vilis.',
        id: '22fbd3b4-4984-4bf4-947c-33f2f747d8d1',
        isActive: true,
        language: 'ru',
        metadata: [],
        name: 'Electronics Newsletter',
        senderCompany: 'Koepp and Sons',
        senderEmail: 'blake.kuhn@hotmail.com',
        senderName: 'Blake Kuhn',
        senderPhone: '359.305.7962 x28115',
        subject: 'Theca caecus copia crebro valeo ulciscor.',
        updatedAt: Utils\Utils::parseDateTime('2022-09-14T14:58:24.252Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechList(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchMartechListRequest](../../Models/Operations/PatchMartechListRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchMartechListResponse](../../Models/Operations/PatchMartechListResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechMember

Updates the MarketingMember identified by `id`. Provide the unified MarketingMember fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechMember" method="patch" path="/martech/{connection_id}/member/{id}" example="martech_member" -->
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

$request = new Operations\PatchMartechMemberRequest(
    marketingMember: new Shared\MarketingMember(
        company: 'Miller - Franecki',
        createdAt: Utils\Utils::parseDateTime('2022-04-15T15:32:38.496Z'),
        emails: [
            new Shared\MarketingEmail(
                email: 'jude.leffler@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
        ],
        firstName: 'Jude',
        id: 'e370412a-41b7-4f71-812c-67728d1a444f',
        lastName: 'Leffler',
        metadata: [],
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'adnuo',
            'verumtamen',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-10T20:49:37.996Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechMember(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchMartechMemberRequest](../../Models/Operations/PatchMartechMemberRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchMartechMemberResponse](../../Models/Operations/PatchMartechMemberResponse.md)**

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

$response = $sdk->martech->removeMartechCampaign(
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

## removeMartechList

Deletes the MarketingList identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechList" method="delete" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\RemoveMartechListRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->removeMartechList(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveMartechListRequest](../../Models/Operations/RemoveMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveMartechListResponse](../../Models/Operations/RemoveMartechListResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechMember

Deletes the MarketingMember identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechMember" method="delete" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\RemoveMartechMemberRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->removeMartechMember(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveMartechMemberRequest](../../Models/Operations/RemoveMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveMartechMemberResponse](../../Models/Operations/RemoveMartechMemberResponse.md)**

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
        id: 'eb611f62-1e78-4ab8-8716-cad17b5c8ccb',
        metadata: [],
        name: 'Consequatur atqui sustineo.',
        previewText: 'Auctus votum ver umbra corroboro turpis spoliatio tamen strues auxilium benigne tempus error eaque suasoria.',
        replyToEmail: 'graham.mertz@icloud.com',
        sendAt: Utils\Utils::parseDateTime('2024-01-23T21:19:26.708Z'),
        status: Shared\MarketingCampaignStatus::Scheduled,
        subjectLine: 'Trepide utpote conculco tibi solio supplanto peior tibi.',
        type: 'absplit',
        updatedAt: Utils\Utils::parseDateTime('2022-06-23T07:20:29.588Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechCampaign(
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

## updateMartechList

Updates the MarketingList identified by `id`. Provide the unified MarketingList fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechList" method="put" path="/martech/{connection_id}/list/{id}" example="martech_list" -->
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

$request = new Operations\UpdateMartechListRequest(
    marketingList: new Shared\MarketingList(
        address: new Shared\PropertyMarketingListAddress(
            address1: '76564 Coronation Road',
            address2: 'Suite 922',
            city: 'West Jordon',
            country: 'Mexico',
            postalCode: '04183',
            region: 'NC',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Vilis.',
        id: '22fbd3b4-4984-4bf4-947c-33f2f747d8d1',
        isActive: true,
        language: 'ru',
        metadata: [],
        name: 'Electronics Newsletter',
        senderCompany: 'Koepp and Sons',
        senderEmail: 'blake.kuhn@hotmail.com',
        senderName: 'Blake Kuhn',
        senderPhone: '359.305.7962 x28115',
        subject: 'Theca caecus copia crebro valeo ulciscor.',
        updatedAt: Utils\Utils::parseDateTime('2022-09-14T14:58:24.252Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechList(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateMartechListRequest](../../Models/Operations/UpdateMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateMartechListResponse](../../Models/Operations/UpdateMartechListResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechMember

Updates the MarketingMember identified by `id`. Provide the unified MarketingMember fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechMember" method="put" path="/martech/{connection_id}/member/{id}" example="martech_member" -->
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

$request = new Operations\UpdateMartechMemberRequest(
    marketingMember: new Shared\MarketingMember(
        company: 'Miller - Franecki',
        createdAt: Utils\Utils::parseDateTime('2022-04-15T15:32:38.496Z'),
        emails: [
            new Shared\MarketingEmail(
                email: 'jude.leffler@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
        ],
        firstName: 'Jude',
        id: 'e370412a-41b7-4f71-812c-67728d1a444f',
        lastName: 'Leffler',
        metadata: [],
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'adnuo',
            'verumtamen',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-10T20:49:37.996Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechMember(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateMartechMemberRequest](../../Models/Operations/UpdateMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateMartechMemberResponse](../../Models/Operations/UpdateMartechMemberResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |