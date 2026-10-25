# Group

## Overview

### Available Operations

* [createAdsGroup](#createadsgroup) - Create a group
* [createHrisGroup](#createhrisgroup) - Create a group
* [createScimGroups](#createscimgroups) - Create group
* [getAdsGroup](#getadsgroup) - Retrieve a group
* [getClubsGroup](#getclubsgroup) - Retrieve a group
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [getScimGroups](#getscimgroups) - Get group
* [listAdsGroups](#listadsgroups) - List all groups
* [listClubsGroups](#listclubsgroups) - List all groups
* [listHrisGroups](#listhrisgroups) - List all groups
* [listScimGroups](#listscimgroups) - List groups
* [patchAdsGroup](#patchadsgroup) - Update a group
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [patchScimGroups](#patchscimgroups) - Update group
* [removeAdsGroup](#removeadsgroup) - Remove a group
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [removeScimGroups](#removescimgroups) - Delete group
* [updateAdsGroup](#updateadsgroup) - Update a group
* [updateHrisGroup](#updatehrisgroup) - Update a group
* [updateScimGroups](#updatescimgroups) - Update group

## createAdsGroup

Creates a AdsGroup. Provide the unified AdsGroup fields in the request body; they are mapped to the provider's API. Returns the created AdsGroup.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsGroup" method="post" path="/ads/{connection_id}/group" example="ads_group" -->
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

$request = new Operations\CreateAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-06-28T22:03:49.649Z'),
        id: 'b6c68e61-6778-48c6-868e-362ac79a2c85',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2026-01-12T21:06:40.422Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-15T00:27:10.186Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->group->createAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateAdsGroupRequest](../../Models/Operations/CreateAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateAdsGroupResponse](../../Models/Operations/CreateAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisGroup

Creates a HrisGroup. Provide the unified HrisGroup fields in the request body; they are mapped to the provider's API. Returns the created HrisGroup.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisGroup" method="post" path="/hris/{connection_id}/group" example="hris_group" -->
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

$request = new Operations\CreateHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: '0e5d86c0-58fd-4b3c-9406-0f6c2c064256',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T10:44:40.841Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->group->createHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createScimGroups

Create group

### Example Usage

<!-- UsageSnippet language="php" operationID="createScimGroups" method="post" path="/scim/{connection_id}/groups" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Nina.Tremblay',
    ),
    connectionId: '<id>',
);

$response = $sdk->group->createScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateScimGroupsRequest](../../Models/Operations/CreateScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateScimGroupsResponse](../../Models/Operations/CreateScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsGroup

Retrieves a single AdsGroup by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsGroup" method="get" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\GetAdsGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetAdsGroupRequest](../../Models/Operations/GetAdsGroupRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetAdsGroupResponse](../../Models/Operations/GetAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsGroup

Retrieves a single ClubsGroup by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsGroup" method="get" path="/clubs/{connection_id}/group/{id}" -->
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

$request = new Operations\GetClubsGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getClubsGroup(
    request: $request
);

if ($response->clubsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetClubsGroupRequest](../../Models/Operations/GetClubsGroupRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetClubsGroupResponse](../../Models/Operations/GetClubsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisGroup

Retrieves a single HrisGroup by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisGroup" method="get" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\GetHrisGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getScimGroups

Get group

### Example Usage

<!-- UsageSnippet language="php" operationID="getScimGroups" method="get" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\GetScimGroupsRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetScimGroupsRequest](../../Models/Operations/GetScimGroupsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetScimGroupsResponse](../../Models/Operations/GetScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsGroups

Returns a list of AdsGroups. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsGroups" method="get" path="/ads/{connection_id}/group" -->
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

$request = new Operations\ListAdsGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->group->listAdsGroups(
    request: $request
);

if ($response->adsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListAdsGroupsRequest](../../Models/Operations/ListAdsGroupsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListAdsGroupsResponse](../../Models/Operations/ListAdsGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsGroups

Returns a list of ClubsGroups. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsGroups" method="get" path="/clubs/{connection_id}/group" -->
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

$request = new Operations\ListClubsGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->group->listClubsGroups(
    request: $request
);

if ($response->clubsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListClubsGroupsRequest](../../Models/Operations/ListClubsGroupsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListClubsGroupsResponse](../../Models/Operations/ListClubsGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisGroups

Returns a list of HrisGroups. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisGroups" method="get" path="/hris/{connection_id}/group" -->
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

$request = new Operations\ListHrisGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->group->listHrisGroups(
    request: $request
);

if ($response->hrisGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listScimGroups

List groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listScimGroups" method="get" path="/scim/{connection_id}/groups" -->
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

$request = new Operations\ListScimGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->group->listScimGroups(
    request: $request
);

if ($response->scimGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListScimGroupsRequest](../../Models/Operations/ListScimGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListScimGroupsResponse](../../Models/Operations/ListScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsGroup

Updates the AdsGroup identified by `id`. Provide the unified AdsGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsGroup" method="patch" path="/ads/{connection_id}/group/{id}" example="ads_group" -->
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

$request = new Operations\PatchAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-06-28T22:03:49.822Z'),
        id: 'ea3aeecb-3c6a-4cc5-b20c-88f2da6d025d',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2026-01-12T21:06:40.584Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-15T00:27:10.246Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->patchAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchAdsGroupRequest](../../Models/Operations/PatchAdsGroupRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchAdsGroupResponse](../../Models/Operations/PatchAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisGroup

Updates the HrisGroup identified by `id`. Provide the unified HrisGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisGroup" method="patch" path="/hris/{connection_id}/group/{id}" example="hris_group" -->
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

$request = new Operations\PatchHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: 'ea08a868-53fa-4801-bdc2-1c58ab121985',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T10:44:40.852Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->patchHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchScimGroups

Update group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchScimGroups" method="patch" path="/scim/{connection_id}/groups/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Newell.Hoeger',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->patchScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchScimGroupsRequest](../../Models/Operations/PatchScimGroupsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchScimGroupsResponse](../../Models/Operations/PatchScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsGroup

Deletes the AdsGroup identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsGroup" method="delete" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveAdsGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->removeAdsGroup(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveAdsGroupRequest](../../Models/Operations/RemoveAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveAdsGroupResponse](../../Models/Operations/RemoveAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisGroup

Deletes the HrisGroup identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisGroup" method="delete" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveHrisGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->removeHrisGroup(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeScimGroups

Delete group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeScimGroups" method="delete" path="/scim/{connection_id}/groups/{id}" -->
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

$request = new Operations\RemoveScimGroupsRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->removeScimGroups(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveScimGroupsRequest](../../Models/Operations/RemoveScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveScimGroupsResponse](../../Models/Operations/RemoveScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsGroup

Updates the AdsGroup identified by `id`. Provide the unified AdsGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsGroup" method="put" path="/ads/{connection_id}/group/{id}" example="ads_group" -->
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

$request = new Operations\UpdateAdsGroupRequest(
    adsGroup: new Shared\AdsGroup(
        bidAmount: 26.16030164062977,
        budgetAmount: 5099.175239447504,
        budgetPeriod: Shared\AdsGroupBudgetPeriod::Monthly,
        createdAt: Utils\Utils::parseDateTime('2019-08-29T17:59:41.045Z'),
        currency: 'USD',
        effectiveStatus: Shared\AdsGroupEffectiveStatus::Paused,
        endAt: Utils\Utils::parseDateTime('2026-06-28T22:03:49.822Z'),
        id: 'ea3aeecb-3c6a-4cc5-b20c-88f2da6d025d',
        languageLocale: 'fr-FR',
        metadata: [],
        name: 'Stark - Baumbach',
        startAt: Utils\Utils::parseDateTime('2026-01-12T21:06:40.584Z'),
        status: Shared\AdsGroupStatus::Processing,
        targeting: new Shared\PropertyAdsGroupTargeting(),
        updatedAt: Utils\Utils::parseDateTime('2022-01-15T00:27:10.246Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->updateAdsGroup(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateAdsGroupRequest](../../Models/Operations/UpdateAdsGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateAdsGroupResponse](../../Models/Operations/UpdateAdsGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisGroup

Updates the HrisGroup identified by `id`. Provide the unified HrisGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisGroup" method="put" path="/hris/{connection_id}/group/{id}" example="hris_group" -->
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

$request = new Operations\UpdateHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: 'ea08a868-53fa-4801-bdc2-1c58ab121985',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T10:44:40.852Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->updateHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateScimGroups

Update group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateScimGroups" method="put" path="/scim/{connection_id}/groups/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateScimGroupsRequest(
    scimGroup: new Shared\ScimGroup(
        displayName: 'Reynold90',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->updateScimGroups(
    request: $request
);

if ($response->scimGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateScimGroupsRequest](../../Models/Operations/UpdateScimGroupsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateScimGroupsResponse](../../Models/Operations/UpdateScimGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |