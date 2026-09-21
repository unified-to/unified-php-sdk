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

Create a list

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
            address1: '922 Elmore Manor',
            address2: 'Suite 925',
            city: 'Deerfield Beach',
            country: 'Bahrain',
            postalCode: '30765-6471',
            region: 'FL',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Currus.',
        id: '9dd48000-4c24-4018-b0d9-607604772764',
        isActive: true,
        language: 'it',
        name: 'Annette Nolan',
        senderCompany: 'Hickle - Homenick',
        senderEmail: 'Matt_Steuber@hotmail.com',
        senderName: 'Salvatore Roob',
        senderPhone: '896-328-1153 x4957',
        subject: 'Tenetur thymum circumvenio triumphus celo.',
        updatedAt: Utils\Utils::parseDateTime('2022-08-31T16:40:23.965Z'),
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

Create a member

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
                email: 'Thalia.Abernathy61@gmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Maymie59@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Coty27@hotmail.com',
                type: Shared\MarketingEmailType::Work,
            ),
        ],
        firstName: 'Jude',
        id: '741b7317-a18b-485c-963b-068564fa2ddd',
        lastName: 'Leffler',
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'vinco',
            'ceno',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-06-17T05:09:11.619Z'),
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

Retrieve a list

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

Retrieve a member

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

List all lists

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

List all members

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

List all reports

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

Update a list

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
            address1: '922 Elmore Manor',
            address2: 'Suite 925',
            city: 'Deerfield Beach',
            country: 'Bahrain',
            postalCode: '30765-6471',
            region: 'FL',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Currus.',
        id: 'b08d4da3-858c-49f9-ab93-68b1851f61a5',
        isActive: true,
        language: 'it',
        name: 'Annette Nolan',
        senderCompany: 'Hickle - Homenick',
        senderEmail: 'Matt_Steuber@hotmail.com',
        senderName: 'Salvatore Roob',
        senderPhone: '896-328-1153 x4957',
        subject: 'Tenetur thymum circumvenio triumphus celo.',
        updatedAt: Utils\Utils::parseDateTime('2022-08-31T16:40:23.972Z'),
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

Update a member

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
                email: 'Thalia.Abernathy61@gmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Maymie59@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Coty27@hotmail.com',
                type: Shared\MarketingEmailType::Work,
            ),
        ],
        firstName: 'Jude',
        id: 'b51c42eb-1060-4612-a30b-4f965508162f',
        lastName: 'Leffler',
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'vinco',
            'ceno',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-06-17T05:09:11.628Z'),
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

Remove a list

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

Remove a member

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

Update a list

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
            address1: '922 Elmore Manor',
            address2: 'Suite 925',
            city: 'Deerfield Beach',
            country: 'Bahrain',
            postalCode: '30765-6471',
            region: 'FL',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-09-18T02:01:36.950Z'),
        description: 'Currus.',
        id: 'b08d4da3-858c-49f9-ab93-68b1851f61a5',
        isActive: true,
        language: 'it',
        name: 'Annette Nolan',
        senderCompany: 'Hickle - Homenick',
        senderEmail: 'Matt_Steuber@hotmail.com',
        senderName: 'Salvatore Roob',
        senderPhone: '896-328-1153 x4957',
        subject: 'Tenetur thymum circumvenio triumphus celo.',
        updatedAt: Utils\Utils::parseDateTime('2022-08-31T16:40:23.972Z'),
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

Update a member

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
                email: 'Thalia.Abernathy61@gmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Maymie59@hotmail.com',
                type: Shared\MarketingEmailType::Home,
            ),
            new Shared\MarketingEmail(
                email: 'Coty27@hotmail.com',
                type: Shared\MarketingEmailType::Work,
            ),
        ],
        firstName: 'Jude',
        id: 'b51c42eb-1060-4612-a30b-4f965508162f',
        lastName: 'Leffler',
        name: 'Jude Leffler',
        status: Shared\MarketingMemberStatus::Unsubscribed,
        tags: [
            'vinco',
            'ceno',
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-06-17T05:09:11.628Z'),
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