# Activity


### Available Operations

* [createAtsActivity](#createatsactivity) - Create an activity
* [getAtsActivity](#getatsactivity) - Retrieve an activity
* [listAtsActivities](#listatsactivities) - List all activities
* [patchAtsActivity](#patchatsactivity) - Update an activity
* [removeAtsActivity](#removeatsactivity) - Remove an activity
* [updateAtsActivity](#updateatsactivity) - Update an activity

## createAtsActivity

Create an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-03T02:06:02.932Z');
    $request->atsActivity->description = 'Future-proofed non-volatile artificial intelligence';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'delectus' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Note;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-23T01:05:37.510Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->createAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsActivityRequest](../../Models/Operations/CreateAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsActivitySecurity](../../Models/Operations/CreateAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsActivityResponse](../../Models/Operations/CreateAtsActivityResponse.md)**


## getAtsActivity

Retrieve an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsActivityRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->getAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsActivityRequest](../../Models/Operations/GetAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsActivitySecurity](../../Models/Operations/GetAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsActivityResponse](../../Models/Operations/GetAtsActivityResponse.md)**


## listAtsActivities

List all activities

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsActivitiesRequest();
    $request->applicationId = '<value>';
    $request->candidateId = '<value>';
    $request->connectionId = '<value>';
    $request->documentId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->interviewId = '<value>';
    $request->jobId = '<value>';
    $request->limit = 2367.19;
    $request->offset = 8254.25;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-13T18:19:17.967Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListAtsActivitiesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->listAtsActivities($request, $requestSecurity);

    if ($response->atsActivities !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest](../../Models/Operations/ListAtsActivitiesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsActivitiesSecurity](../../Models/Operations/ListAtsActivitiesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsActivitiesResponse](../../Models/Operations/ListAtsActivitiesResponse.md)**


## patchAtsActivity

Update an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-03T16:46:57.187Z');
    $request->atsActivity->description = 'Compatible reciprocal archive';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'bypass' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Note;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-01T06:46:19.269Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->patchAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsActivityRequest](../../Models/Operations/PatchAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsActivitySecurity](../../Models/Operations/PatchAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsActivityResponse](../../Models/Operations/PatchAtsActivityResponse.md)**


## removeAtsActivity

Remove an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsActivityRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->removeAtsActivity($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsActivityRequest](../../Models/Operations/RemoveAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsActivitySecurity](../../Models/Operations/RemoveAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsActivityResponse](../../Models/Operations/RemoveAtsActivityResponse.md)**


## updateAtsActivity

Update an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-06T07:57:58.715Z');
    $request->atsActivity->description = 'Total fault-tolerant collaboration';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'Northwest' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Task;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-23T02:31:19.090Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->activity->updateAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsActivityRequest](../../Models/Operations/UpdateAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsActivitySecurity](../../Models/Operations/UpdateAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsActivityResponse](../../Models/Operations/UpdateAtsActivityResponse.md)**

