# Group

## Overview

### Available Operations

* [createAdsGroup2](#createadsgroup2) - Create a group
* [createHrisGroup2](#createhrisgroup2) - Create a group
* [createScimGroups](#createscimgroups) - Create group
* [getAdsGroup2](#getadsgroup2) - Retrieve a group
* [getClubsGroup2](#getclubsgroup2) - Retrieve a group
* [getHrisGroup2](#gethrisgroup2) - Retrieve a group
* [getScimGroups](#getscimgroups) - Get group
* [listAdsGroups2](#listadsgroups2) - List all groups
* [listClubsGroups2](#listclubsgroups2) - List all groups
* [listHrisGroups2](#listhrisgroups2) - List all groups
* [listScimGroups](#listscimgroups) - List groups
* [patchAdsGroup2](#patchadsgroup2) - Update a group
* [patchHrisGroup2](#patchhrisgroup2) - Update a group
* [patchScimGroups](#patchscimgroups) - Update group
* [removeAdsGroup2](#removeadsgroup2) - Remove a group
* [removeHrisGroup2](#removehrisgroup2) - Remove a group
* [removeScimGroups](#removescimgroups) - Delete group
* [updateAdsGroup2](#updateadsgroup2) - Update a group
* [updateHrisGroup2](#updatehrisgroup2) - Update a group
* [updateScimGroups](#updatescimgroups) - Update group

## createAdsGroup2

Create a group

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsGroup2" method="post" path="/ads/{connection_id}/group" -->
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

$request = new Operations\CreateAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
);

$response = $sdk->group->createAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateAdsGroup2Request](../../Models/Operations/CreateAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateAdsGroup2Response](../../Models/Operations/CreateAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisGroup2

Create a group

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisGroup2" method="post" path="/hris/{connection_id}/group" -->
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

$request = new Operations\CreateHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
);

$response = $sdk->group->createHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateHrisGroup2Request](../../Models/Operations/CreateHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateHrisGroup2Response](../../Models/Operations/CreateHrisGroup2Response.md)**

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

## getAdsGroup2

Retrieve a group

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsGroup2" method="get" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\GetAdsGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetAdsGroup2Request](../../Models/Operations/GetAdsGroup2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetAdsGroup2Response](../../Models/Operations/GetAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsGroup2

Retrieve a group

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsGroup2" method="get" path="/clubs/{connection_id}/group/{id}" -->
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

$request = new Operations\GetClubsGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getClubsGroup2(
    request: $request
);

if ($response->clubsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetClubsGroup2Request](../../Models/Operations/GetClubsGroup2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetClubsGroup2Response](../../Models/Operations/GetClubsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisGroup2

Retrieve a group

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisGroup2" method="get" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\GetHrisGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->getHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetHrisGroup2Request](../../Models/Operations/GetHrisGroup2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetHrisGroup2Response](../../Models/Operations/GetHrisGroup2Response.md)**

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

## listAdsGroups2

List all groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsGroups2" method="get" path="/ads/{connection_id}/group" -->
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

$request = new Operations\ListAdsGroups2Request(
    connectionId: '<id>',
);

$response = $sdk->group->listAdsGroups2(
    request: $request
);

if ($response->adsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListAdsGroups2Request](../../Models/Operations/ListAdsGroups2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListAdsGroups2Response](../../Models/Operations/ListAdsGroups2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsGroups2

List all groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsGroups2" method="get" path="/clubs/{connection_id}/group" -->
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

$request = new Operations\ListClubsGroups2Request(
    connectionId: '<id>',
);

$response = $sdk->group->listClubsGroups2(
    request: $request
);

if ($response->clubsGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListClubsGroups2Request](../../Models/Operations/ListClubsGroups2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListClubsGroups2Response](../../Models/Operations/ListClubsGroups2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisGroups2

List all groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisGroups2" method="get" path="/hris/{connection_id}/group" -->
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

$request = new Operations\ListHrisGroups2Request(
    connectionId: '<id>',
);

$response = $sdk->group->listHrisGroups2(
    request: $request
);

if ($response->hrisGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListHrisGroups2Request](../../Models/Operations/ListHrisGroups2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListHrisGroups2Response](../../Models/Operations/ListHrisGroups2Response.md)**

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

## patchAdsGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsGroup2" method="patch" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\PatchAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->patchAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchAdsGroup2Request](../../Models/Operations/PatchAdsGroup2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchAdsGroup2Response](../../Models/Operations/PatchAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisGroup2" method="patch" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\PatchHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->patchHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchHrisGroup2Request](../../Models/Operations/PatchHrisGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchHrisGroup2Response](../../Models/Operations/PatchHrisGroup2Response.md)**

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

## removeAdsGroup2

Remove a group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsGroup2" method="delete" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveAdsGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->removeAdsGroup2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveAdsGroup2Request](../../Models/Operations/RemoveAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveAdsGroup2Response](../../Models/Operations/RemoveAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisGroup2

Remove a group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisGroup2" method="delete" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveHrisGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->removeHrisGroup2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveHrisGroup2Request](../../Models/Operations/RemoveHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveHrisGroup2Response](../../Models/Operations/RemoveHrisGroup2Response.md)**

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

## updateAdsGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsGroup2" method="put" path="/ads/{connection_id}/group/{id}" -->
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

$request = new Operations\UpdateAdsGroup2Request(
    adsGroup: new Shared\AdsGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->updateAdsGroup2(
    request: $request
);

if ($response->adsGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateAdsGroup2Request](../../Models/Operations/UpdateAdsGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateAdsGroup2Response](../../Models/Operations/UpdateAdsGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisGroup2" method="put" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\UpdateHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->group->updateHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateHrisGroup2Request](../../Models/Operations/UpdateHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateHrisGroup2Response](../../Models/Operations/UpdateHrisGroup2Response.md)**

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