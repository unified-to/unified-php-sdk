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

Create an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: 'bc821ec1-e619-4856-971a-3c6723d60ba6',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '8e291d12-4956-4608-99dc-523b2cbbbc8c',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '8538292f-3574-4b03-ba1f-4b3f5a6ef5a6',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-07T11:08:34.731Z'),
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

Create an activity

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
        completedAt: Utils\Utils::parseDateTime('2025-04-13T08:57:07.863Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '74f91fcd-11ed-431f-ab3a-db2ccf3d3ccd',
        isCompleted: true,
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2023-12-24T04:54:05.825Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-24T03:04:14.245Z'),
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

Retrieve an activity

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

Retrieve an activity

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

List all activities

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

List all activities

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

Update an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: 'd6addf7e-5a7f-4daf-bd83-49bb6f281422',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '3e029683-5ba4-4125-ad53-59e60f5f4647',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '25339dab-75df-45f0-b0cf-8a3b2e35ce8f',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-07T11:08:34.749Z'),
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

Update an activity

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
        completedAt: Utils\Utils::parseDateTime('2025-04-13T08:57:07.867Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '8a003cfc-87f6-4163-b4b9-39e64c250198',
        isCompleted: true,
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2023-12-24T04:54:05.825Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-24T03:04:14.247Z'),
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

Remove an activity

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

Remove an activity

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

Update an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: 'd6addf7e-5a7f-4daf-bd83-49bb6f281422',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '3e029683-5ba4-4125-ad53-59e60f5f4647',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '25339dab-75df-45f0-b0cf-8a3b2e35ce8f',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-07T11:08:34.749Z'),
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

Update an activity

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
        completedAt: Utils\Utils::parseDateTime('2025-04-13T08:57:07.867Z'),
        createdAt: Utils\Utils::parseDateTime('2020-10-17T01:25:21.745Z'),
        durationMinutes: 55,
        id: '8a003cfc-87f6-4163-b4b9-39e64c250198',
        isCompleted: true,
        progressPercentage: 100,
        startedAt: Utils\Utils::parseDateTime('2023-12-24T04:54:05.825Z'),
        updatedAt: Utils\Utils::parseDateTime('2022-01-24T03:04:14.247Z'),
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