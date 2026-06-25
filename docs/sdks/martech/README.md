# Martech

## Overview

### Available Operations

* [createMartechCampaign2](#createmartechcampaign2) - Create a campaign
* [createMartechList2](#createmartechlist2) - Create a list
* [createMartechMember2](#createmartechmember2) - Create a member
* [getMartechCampaign2](#getmartechcampaign2) - Retrieve a campaign
* [getMartechList2](#getmartechlist2) - Retrieve a list
* [getMartechMember2](#getmartechmember2) - Retrieve a member
* [listMartechCampaigns2](#listmartechcampaigns2) - List all campaigns
* [listMartechLists2](#listmartechlists2) - List all lists
* [listMartechMembers2](#listmartechmembers2) - List all members
* [listMartechReports2](#listmartechreports2) - List all reports
* [patchMartechCampaign2](#patchmartechcampaign2) - Update a campaign
* [patchMartechList2](#patchmartechlist2) - Update a list
* [patchMartechMember2](#patchmartechmember2) - Update a member
* [removeMartechCampaign2](#removemartechcampaign2) - Remove a campaign
* [removeMartechList2](#removemartechlist2) - Remove a list
* [removeMartechMember2](#removemartechmember2) - Remove a member
* [updateMartechCampaign2](#updatemartechcampaign2) - Update a campaign
* [updateMartechList2](#updatemartechlist2) - Update a list
* [updateMartechMember2](#updatemartechmember2) - Update a member

## createMartechCampaign2

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechCampaign2" method="post" path="/martech/{connection_id}/campaign" -->
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

$request = new Operations\CreateMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMartechCampaign2Request](../../Models/Operations/CreateMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMartechCampaign2Response](../../Models/Operations/CreateMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createMartechList2

Create a list

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechList2" method="post" path="/martech/{connection_id}/list" -->
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

$request = new Operations\CreateMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateMartechList2Request](../../Models/Operations/CreateMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateMartechList2Response](../../Models/Operations/CreateMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createMartechMember2

Create a member

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechMember2" method="post" path="/martech/{connection_id}/member" -->
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

$request = new Operations\CreateMartechMember2Request(
    marketingMember: new Shared\MarketingMember(),
    connectionId: '<id>',
);

$response = $sdk->martech->createMartechMember2(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateMartechMember2Request](../../Models/Operations/CreateMartechMember2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateMartechMember2Response](../../Models/Operations/CreateMartechMember2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechCampaign2

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechCampaign2" method="get" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetMartechCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->getMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMartechCampaign2Request](../../Models/Operations/GetMartechCampaign2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMartechCampaign2Response](../../Models/Operations/GetMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechList2

Retrieve a list

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechList2" method="get" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\GetMartechList2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->getMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetMartechList2Request](../../Models/Operations/GetMartechList2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetMartechList2Response](../../Models/Operations/GetMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechMember2

Retrieve a member

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechMember2" method="get" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\GetMartechMember2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->getMartechMember2(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetMartechMember2Request](../../Models/Operations/GetMartechMember2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetMartechMember2Response](../../Models/Operations/GetMartechMember2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechCampaigns2

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechCampaigns2" method="get" path="/martech/{connection_id}/campaign" -->
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

$request = new Operations\ListMartechCampaigns2Request(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechCampaigns2(
    request: $request
);

if ($response->marketingCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMartechCampaigns2Request](../../Models/Operations/ListMartechCampaigns2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMartechCampaigns2Response](../../Models/Operations/ListMartechCampaigns2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechLists2

List all lists

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechLists2" method="get" path="/martech/{connection_id}/list" -->
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

$request = new Operations\ListMartechLists2Request(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechLists2(
    request: $request
);

if ($response->marketingLists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListMartechLists2Request](../../Models/Operations/ListMartechLists2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListMartechLists2Response](../../Models/Operations/ListMartechLists2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechMembers2

List all members

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechMembers2" method="get" path="/martech/{connection_id}/member" -->
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

$request = new Operations\ListMartechMembers2Request(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechMembers2(
    request: $request
);

if ($response->marketingMembers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListMartechMembers2Request](../../Models/Operations/ListMartechMembers2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListMartechMembers2Response](../../Models/Operations/ListMartechMembers2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechReports2" method="get" path="/martech/{connection_id}/report" -->
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

$request = new Operations\ListMartechReports2Request(
    connectionId: '<id>',
);

$response = $sdk->martech->listMartechReports2(
    request: $request
);

if ($response->marketingReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListMartechReports2Request](../../Models/Operations/ListMartechReports2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListMartechReports2Response](../../Models/Operations/ListMartechReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechCampaign2" method="patch" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\PatchMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMartechCampaign2Request](../../Models/Operations/PatchMartechCampaign2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMartechCampaign2Response](../../Models/Operations/PatchMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechList2

Update a list

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechList2" method="patch" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\PatchMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchMartechList2Request](../../Models/Operations/PatchMartechList2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchMartechList2Response](../../Models/Operations/PatchMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechMember2

Update a member

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechMember2" method="patch" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\PatchMartechMember2Request(
    marketingMember: new Shared\MarketingMember(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->patchMartechMember2(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchMartechMember2Request](../../Models/Operations/PatchMartechMember2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchMartechMember2Response](../../Models/Operations/PatchMartechMember2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechCampaign2

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechCampaign2" method="delete" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveMartechCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->removeMartechCampaign2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMartechCampaign2Request](../../Models/Operations/RemoveMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMartechCampaign2Response](../../Models/Operations/RemoveMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechList2

Remove a list

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechList2" method="delete" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\RemoveMartechList2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->removeMartechList2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveMartechList2Request](../../Models/Operations/RemoveMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveMartechList2Response](../../Models/Operations/RemoveMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechMember2

Remove a member

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechMember2" method="delete" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\RemoveMartechMember2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->removeMartechMember2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveMartechMember2Request](../../Models/Operations/RemoveMartechMember2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveMartechMember2Response](../../Models/Operations/RemoveMartechMember2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechCampaign2" method="put" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\UpdateMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMartechCampaign2Request](../../Models/Operations/UpdateMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMartechCampaign2Response](../../Models/Operations/UpdateMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechList2

Update a list

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechList2" method="put" path="/martech/{connection_id}/list/{id}" -->
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

$request = new Operations\UpdateMartechList2Request(
    marketingList: new Shared\MarketingList(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechList2(
    request: $request
);

if ($response->marketingList !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateMartechList2Request](../../Models/Operations/UpdateMartechList2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateMartechList2Response](../../Models/Operations/UpdateMartechList2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechMember2

Update a member

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechMember2" method="put" path="/martech/{connection_id}/member/{id}" -->
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

$request = new Operations\UpdateMartechMember2Request(
    marketingMember: new Shared\MarketingMember(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->martech->updateMartechMember2(
    request: $request
);

if ($response->marketingMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateMartechMember2Request](../../Models/Operations/UpdateMartechMember2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateMartechMember2Response](../../Models/Operations/UpdateMartechMember2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |