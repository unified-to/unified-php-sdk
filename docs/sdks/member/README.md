# Member

## Overview

### Available Operations

* [createMartechMember2](#createmartechmember2) - Create a member
* [getClubsMember2](#getclubsmember2) - Retrieve a member
* [getMartechMember2](#getmartechmember2) - Retrieve a member
* [listClubsMembers2](#listclubsmembers2) - List all members
* [listMartechMembers2](#listmartechmembers2) - List all members
* [patchMartechMember2](#patchmartechmember2) - Update a member
* [removeMartechMember2](#removemartechmember2) - Remove a member
* [updateMartechMember2](#updatemartechmember2) - Update a member

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

$response = $sdk->member->createMartechMember2(
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

## getClubsMember2

Retrieve a member

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsMember2" method="get" path="/clubs/{connection_id}/member/{id}" -->
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

$request = new Operations\GetClubsMember2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->member->getClubsMember2(
    request: $request
);

if ($response->clubsMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetClubsMember2Request](../../Models/Operations/GetClubsMember2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetClubsMember2Response](../../Models/Operations/GetClubsMember2Response.md)**

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

$response = $sdk->member->getMartechMember2(
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

## listClubsMembers2

List all members

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsMembers2" method="get" path="/clubs/{connection_id}/member" -->
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

$request = new Operations\ListClubsMembers2Request(
    connectionId: '<id>',
);

$response = $sdk->member->listClubsMembers2(
    request: $request
);

if ($response->clubsMembers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListClubsMembers2Request](../../Models/Operations/ListClubsMembers2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListClubsMembers2Response](../../Models/Operations/ListClubsMembers2Response.md)**

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

$response = $sdk->member->listMartechMembers2(
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

$response = $sdk->member->patchMartechMember2(
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

$response = $sdk->member->removeMartechMember2(
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

$response = $sdk->member->updateMartechMember2(
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