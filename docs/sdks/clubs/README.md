# Clubs

## Overview

### Available Operations

* [getClubsActivity2](#getclubsactivity2) - Retrieve an activity
* [getClubsEvent2](#getclubsevent2) - Retrieve an event
* [getClubsGroup2](#getclubsgroup2) - Retrieve a group
* [getClubsLocation2](#getclubslocation2) - Retrieve a location
* [getClubsMember2](#getclubsmember2) - Retrieve a member
* [listClubsActivities2](#listclubsactivities2) - List all activities
* [listClubsEvents2](#listclubsevents2) - List all events
* [listClubsGroups2](#listclubsgroups2) - List all groups
* [listClubsLocations2](#listclubslocations2) - List all locations
* [listClubsMembers2](#listclubsmembers2) - List all members

## getClubsActivity2

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsActivity2" method="get" path="/clubs/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetClubsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsActivity2(
    request: $request
);

if ($response->clubsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetClubsActivity2Request](../../Models/Operations/GetClubsActivity2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetClubsActivity2Response](../../Models/Operations/GetClubsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsEvent2" method="get" path="/clubs/{connection_id}/event/{id}" -->
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

$request = new Operations\GetClubsEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsEvent2(
    request: $request
);

if ($response->clubsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetClubsEvent2Request](../../Models/Operations/GetClubsEvent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetClubsEvent2Response](../../Models/Operations/GetClubsEvent2Response.md)**

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

$response = $sdk->clubs->getClubsGroup2(
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

## getClubsLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsLocation2" method="get" path="/clubs/{connection_id}/location/{id}" -->
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

$request = new Operations\GetClubsLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsLocation2(
    request: $request
);

if ($response->clubsLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetClubsLocation2Request](../../Models/Operations/GetClubsLocation2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetClubsLocation2Response](../../Models/Operations/GetClubsLocation2Response.md)**

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

$response = $sdk->clubs->getClubsMember2(
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

## listClubsActivities2

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsActivities2" method="get" path="/clubs/{connection_id}/activity" -->
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

$request = new Operations\ListClubsActivities2Request(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsActivities2(
    request: $request
);

if ($response->clubsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListClubsActivities2Request](../../Models/Operations/ListClubsActivities2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListClubsActivities2Response](../../Models/Operations/ListClubsActivities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsEvents2" method="get" path="/clubs/{connection_id}/event" -->
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

$request = new Operations\ListClubsEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsEvents2(
    request: $request
);

if ($response->clubsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListClubsEvents2Request](../../Models/Operations/ListClubsEvents2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListClubsEvents2Response](../../Models/Operations/ListClubsEvents2Response.md)**

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

$response = $sdk->clubs->listClubsGroups2(
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

## listClubsLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsLocations2" method="get" path="/clubs/{connection_id}/location" -->
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

$request = new Operations\ListClubsLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsLocations2(
    request: $request
);

if ($response->clubsLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListClubsLocations2Request](../../Models/Operations/ListClubsLocations2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListClubsLocations2Response](../../Models/Operations/ListClubsLocations2Response.md)**

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

$response = $sdk->clubs->listClubsMembers2(
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