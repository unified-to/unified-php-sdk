# Clubs

## Overview

### Available Operations

* [getClubsActivity](#getclubsactivity) - Retrieve an activity
* [getClubsEvent](#getclubsevent) - Retrieve an event
* [getClubsGroup](#getclubsgroup) - Retrieve a group
* [getClubsLocation](#getclubslocation) - Retrieve a location
* [getClubsMember](#getclubsmember) - Retrieve a member
* [listClubsActivities](#listclubsactivities) - List all activities
* [listClubsEvents](#listclubsevents) - List all events
* [listClubsGroups](#listclubsgroups) - List all groups
* [listClubsLocations](#listclubslocations) - List all locations
* [listClubsMembers](#listclubsmembers) - List all members

## getClubsActivity

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsActivity" method="get" path="/clubs/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetClubsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsActivity(
    request: $request
);

if ($response->clubsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetClubsActivityRequest](../../Models/Operations/GetClubsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetClubsActivityResponse](../../Models/Operations/GetClubsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsEvent" method="get" path="/clubs/{connection_id}/event/{id}" -->
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

$request = new Operations\GetClubsEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsEvent(
    request: $request
);

if ($response->clubsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetClubsEventRequest](../../Models/Operations/GetClubsEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetClubsEventResponse](../../Models/Operations/GetClubsEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsGroup

Retrieve a group

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

$response = $sdk->clubs->getClubsGroup(
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

## getClubsLocation

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsLocation" method="get" path="/clubs/{connection_id}/location/{id}" -->
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

$request = new Operations\GetClubsLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsLocation(
    request: $request
);

if ($response->clubsLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetClubsLocationRequest](../../Models/Operations/GetClubsLocationRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetClubsLocationResponse](../../Models/Operations/GetClubsLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsMember

Retrieve a member

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsMember" method="get" path="/clubs/{connection_id}/member/{id}" -->
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

$request = new Operations\GetClubsMemberRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->clubs->getClubsMember(
    request: $request
);

if ($response->clubsMember !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetClubsMemberRequest](../../Models/Operations/GetClubsMemberRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetClubsMemberResponse](../../Models/Operations/GetClubsMemberResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsActivities

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsActivities" method="get" path="/clubs/{connection_id}/activity" -->
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

$request = new Operations\ListClubsActivitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsActivities(
    request: $request
);

if ($response->clubsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListClubsActivitiesRequest](../../Models/Operations/ListClubsActivitiesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListClubsActivitiesResponse](../../Models/Operations/ListClubsActivitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsEvents" method="get" path="/clubs/{connection_id}/event" -->
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

$request = new Operations\ListClubsEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsEvents(
    request: $request
);

if ($response->clubsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListClubsEventsRequest](../../Models/Operations/ListClubsEventsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListClubsEventsResponse](../../Models/Operations/ListClubsEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsGroups

List all groups

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

$response = $sdk->clubs->listClubsGroups(
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

## listClubsLocations

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsLocations" method="get" path="/clubs/{connection_id}/location" -->
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

$request = new Operations\ListClubsLocationsRequest(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsLocations(
    request: $request
);

if ($response->clubsLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListClubsLocationsRequest](../../Models/Operations/ListClubsLocationsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListClubsLocationsResponse](../../Models/Operations/ListClubsLocationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsMembers

List all members

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsMembers" method="get" path="/clubs/{connection_id}/member" -->
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

$request = new Operations\ListClubsMembersRequest(
    connectionId: '<id>',
);

$response = $sdk->clubs->listClubsMembers(
    request: $request
);

if ($response->clubsMembers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListClubsMembersRequest](../../Models/Operations/ListClubsMembersRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListClubsMembersResponse](../../Models/Operations/ListClubsMembersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |