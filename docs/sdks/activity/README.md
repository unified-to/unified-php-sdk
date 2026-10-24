# Activity

## Overview

### Available Operations

* [createAtsActivity](#createatsactivity) - Create an activity
* [createLmsActivity](#createlmsactivity) - Create an activity
* [getAtsActivity](#getatsactivity) - Retrieve an activity
* [getClubsActivity](#getclubsactivity) - Retrieve an activity
* [getLmsActivity](#getlmsactivity) - Retrieve an activity
* [listAtsActivities](#listatsactivities) - List all activities
* [listClubsActivities](#listclubsactivities) - List all activities
* [listLmsActivities](#listlmsactivities) - List all activities
* [patchAtsActivity](#patchatsactivity) - Update an activity
* [patchLmsActivity](#patchlmsactivity) - Update an activity
* [removeAtsActivity](#removeatsactivity) - Remove an activity
* [removeLmsActivity](#removelmsactivity) - Remove an activity
* [updateAtsActivity](#updateatsactivity) - Update an activity
* [updateLmsActivity](#updatelmsactivity) - Update an activity

## createAtsActivity

Creates a AtsActivity. Provide the unified AtsActivity fields in the request body; they are mapped to the provider's API. Returns the created AtsActivity.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsActivity" method="post" path="/ats/{connection_id}/activity" example="ats_activity" -->
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

$request = new Operations\CreateAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Sapiente.',
        id: '865d709a-2b32-4dec-9ded-2f48195cbb44',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '04e04d96-c849-487a-b356-766bdcd7e0bd',
                namespace: 'activity',
                slug: 'cimentarius',
                value: 'Reprehenderit verto.',
            ),
        ],
        subType: 'TASK',
        title: 'Venio blandior aureus.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-04-06T18:09:17.144Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->activity->createAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsActivityRequest](../../Models/Operations/CreateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsActivityResponse](../../Models/Operations/CreateAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsActivity

Creates a LmsActivity. Provide the unified LmsActivity fields in the request body; they are mapped to the provider's API. Returns the created LmsActivity.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsActivity" method="post" path="/lms/{connection_id}/activity" example="lms_activity" -->
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

$request = new Operations\CreateLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'summopere',
        completedAt: Utils\Utils::parseDateTime('2023-12-07T11:21:50.388Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: 'cfa8563b-bd98-4cf8-bb75-6685a0e121db',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-25T10:19:06.138Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-31T14:22:03.015Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->activity->createLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateLmsActivityRequest](../../Models/Operations/CreateLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateLmsActivityResponse](../../Models/Operations/CreateLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsActivity

Retrieves a single AtsActivity by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsActivity" method="get" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetAtsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->getAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsActivityRequest](../../Models/Operations/GetAtsActivityRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsActivityResponse](../../Models/Operations/GetAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsActivity

Retrieves a single ClubsActivity by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->activity->getClubsActivity(
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

## getLmsActivity

Retrieves a single LmsActivity by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsActivity" method="get" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetLmsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->getLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetLmsActivityRequest](../../Models/Operations/GetLmsActivityRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetLmsActivityResponse](../../Models/Operations/GetLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsActivities

Returns a list of AtsActivities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsActivities" method="get" path="/ats/{connection_id}/activity" -->
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

$request = new Operations\ListAtsActivitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->activity->listAtsActivities(
    request: $request
);

if ($response->atsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsActivitiesRequest](../../Models/Operations/ListAtsActivitiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsActivitiesResponse](../../Models/Operations/ListAtsActivitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsActivities

Returns a list of ClubsActivities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->activity->listClubsActivities(
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

## listLmsActivities

Returns a list of LmsActivities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsActivities" method="get" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\ListLmsActivitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->activity->listLmsActivities(
    request: $request
);

if ($response->lmsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListLmsActivitiesRequest](../../Models/Operations/ListLmsActivitiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListLmsActivitiesResponse](../../Models/Operations/ListLmsActivitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsActivity

Updates the AtsActivity identified by `id`. Provide the unified AtsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsActivity" method="patch" path="/ats/{connection_id}/activity/{id}" example="ats_activity" -->
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

$request = new Operations\PatchAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Sapiente.',
        id: '89d504df-523e-45c8-aab1-e1b893747be2',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '7afbef51-44ca-4dd3-9061-7c4bdf2ac716',
                namespace: 'activity',
                slug: 'cimentarius',
                value: 'Reprehenderit verto.',
            ),
        ],
        subType: 'TASK',
        title: 'Venio blandior aureus.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-04-06T18:09:17.167Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->patchAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsActivityRequest](../../Models/Operations/PatchAtsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsActivityResponse](../../Models/Operations/PatchAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsActivity

Updates the LmsActivity identified by `id`. Provide the unified LmsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsActivity" method="patch" path="/lms/{connection_id}/activity/{id}" example="lms_activity" -->
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

$request = new Operations\PatchLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'summopere',
        completedAt: Utils\Utils::parseDateTime('2023-12-07T11:21:50.397Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '706ec821-268b-43d4-a37a-b2efa881a662',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-25T10:19:06.140Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-31T14:22:03.019Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->patchLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchLmsActivityRequest](../../Models/Operations/PatchLmsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchLmsActivityResponse](../../Models/Operations/PatchLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsActivity

Deletes the AtsActivity identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsActivity" method="delete" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveAtsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->removeAtsActivity(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsActivityRequest](../../Models/Operations/RemoveAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsActivityResponse](../../Models/Operations/RemoveAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsActivity

Deletes the LmsActivity identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsActivity" method="delete" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveLmsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->removeLmsActivity(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveLmsActivityRequest](../../Models/Operations/RemoveLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveLmsActivityResponse](../../Models/Operations/RemoveLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsActivity

Updates the AtsActivity identified by `id`. Provide the unified AtsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsActivity" method="put" path="/ats/{connection_id}/activity/{id}" example="ats_activity" -->
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

$request = new Operations\UpdateAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Sapiente.',
        id: '89d504df-523e-45c8-aab1-e1b893747be2',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '7afbef51-44ca-4dd3-9061-7c4bdf2ac716',
                namespace: 'activity',
                slug: 'cimentarius',
                value: 'Reprehenderit verto.',
            ),
        ],
        subType: 'TASK',
        title: 'Venio blandior aureus.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-04-06T18:09:17.167Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->updateAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsActivityRequest](../../Models/Operations/UpdateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsActivityResponse](../../Models/Operations/UpdateAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsActivity

Updates the LmsActivity identified by `id`. Provide the unified LmsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsActivity" method="put" path="/lms/{connection_id}/activity/{id}" example="lms_activity" -->
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

$request = new Operations\UpdateLmsActivityRequest(
    lmsActivity: new Shared\LmsActivity(
        assignedGrade: 'summopere',
        completedAt: Utils\Utils::parseDateTime('2023-12-07T11:21:50.397Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '706ec821-268b-43d4-a37a-b2efa881a662',
        isCompleted: true,
        metadata: [],
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2021-04-25T10:19:06.140Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-31T14:22:03.019Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->updateLmsActivity(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateLmsActivityRequest](../../Models/Operations/UpdateLmsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateLmsActivityResponse](../../Models/Operations/UpdateLmsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |