# Activity

## Overview

### Available Operations

* [createAtsActivity2](#createatsactivity2) - Create an activity
* [createLmsActivity2](#createlmsactivity2) - Create an activity
* [getAtsActivity2](#getatsactivity2) - Retrieve an activity
* [getClubsActivity2](#getclubsactivity2) - Retrieve an activity
* [getLmsActivity2](#getlmsactivity2) - Retrieve an activity
* [listAtsActivities2](#listatsactivities2) - List all activities
* [listClubsActivities2](#listclubsactivities2) - List all activities
* [listLmsActivities2](#listlmsactivities2) - List all activities
* [patchAtsActivity2](#patchatsactivity2) - Update an activity
* [patchLmsActivity2](#patchlmsactivity2) - Update an activity
* [removeAtsActivity2](#removeatsactivity2) - Remove an activity
* [removeLmsActivity2](#removelmsactivity2) - Remove an activity
* [updateAtsActivity2](#updateatsactivity2) - Update an activity
* [updateLmsActivity2](#updatelmsactivity2) - Update an activity

## createAtsActivity2

Create an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsActivity2" method="post" path="/ats/{connection_id}/activity" -->
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

$request = new Operations\CreateAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
);

$response = $sdk->activity->createAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsActivity2Request](../../Models/Operations/CreateAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsActivity2Response](../../Models/Operations/CreateAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createLmsActivity2

Create an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsActivity2" method="post" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\CreateLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
);

$response = $sdk->activity->createLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateLmsActivity2Request](../../Models/Operations/CreateLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateLmsActivity2Response](../../Models/Operations/CreateLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsActivity2

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsActivity2" method="get" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetAtsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->getAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsActivity2Request](../../Models/Operations/GetAtsActivity2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsActivity2Response](../../Models/Operations/GetAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->activity->getClubsActivity2(
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

## getLmsActivity2

Retrieve an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsActivity2" method="get" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\GetLmsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->getLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetLmsActivity2Request](../../Models/Operations/GetLmsActivity2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetLmsActivity2Response](../../Models/Operations/GetLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsActivities2

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsActivities2" method="get" path="/ats/{connection_id}/activity" -->
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

$request = new Operations\ListAtsActivities2Request(
    connectionId: '<id>',
);

$response = $sdk->activity->listAtsActivities2(
    request: $request
);

if ($response->atsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListAtsActivities2Request](../../Models/Operations/ListAtsActivities2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListAtsActivities2Response](../../Models/Operations/ListAtsActivities2Response.md)**

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

$response = $sdk->activity->listClubsActivities2(
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

## listLmsActivities2

List all activities

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsActivities2" method="get" path="/lms/{connection_id}/activity" -->
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

$request = new Operations\ListLmsActivities2Request(
    connectionId: '<id>',
);

$response = $sdk->activity->listLmsActivities2(
    request: $request
);

if ($response->lmsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListLmsActivities2Request](../../Models/Operations/ListLmsActivities2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListLmsActivities2Response](../../Models/Operations/ListLmsActivities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsActivity2" method="patch" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\PatchAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->patchAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsActivity2Request](../../Models/Operations/PatchAtsActivity2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsActivity2Response](../../Models/Operations/PatchAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsActivity2" method="patch" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\PatchLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->patchLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchLmsActivity2Request](../../Models/Operations/PatchLmsActivity2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchLmsActivity2Response](../../Models/Operations/PatchLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsActivity2

Remove an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsActivity2" method="delete" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveAtsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->removeAtsActivity2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsActivity2Request](../../Models/Operations/RemoveAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsActivity2Response](../../Models/Operations/RemoveAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsActivity2

Remove an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsActivity2" method="delete" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\RemoveLmsActivity2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->removeLmsActivity2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveLmsActivity2Request](../../Models/Operations/RemoveLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveLmsActivity2Response](../../Models/Operations/RemoveLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsActivity2" method="put" path="/ats/{connection_id}/activity/{id}" -->
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

$request = new Operations\UpdateAtsActivity2Request(
    atsActivity: new Shared\AtsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->updateAtsActivity2(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsActivity2Request](../../Models/Operations/UpdateAtsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsActivity2Response](../../Models/Operations/UpdateAtsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsActivity2

Update an activity

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsActivity2" method="put" path="/lms/{connection_id}/activity/{id}" -->
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

$request = new Operations\UpdateLmsActivity2Request(
    lmsActivity: new Shared\LmsActivity(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->activity->updateLmsActivity2(
    request: $request
);

if ($response->lmsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateLmsActivity2Request](../../Models/Operations/UpdateLmsActivity2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateLmsActivity2Response](../../Models/Operations/UpdateLmsActivity2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |