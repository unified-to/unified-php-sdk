# Interview


### Available Operations

* [createAtsInterview](#createatsinterview) - Create a interview
* [getAtsInterview](#getatsinterview) - Retrieve a interview
* [listAtsInterviews](#listatsinterviews) - List all interviews
* [patchAtsInterview](#patchatsinterview) - Update a interview
* [removeAtsInterview](#removeatsinterview) - Remove a interview
* [updateAtsInterview](#updateatsinterview) - Update a interview

## createAtsInterview

Create a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-10T19:55:26.926Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-21T09:01:54.390Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new Shared\PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-19T09:10:03.014Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-07T14:25:56.954Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';

    $response = $sdk->interview->createAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest](../../Models/Operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse](../../Models/Operations/CreateAtsInterviewResponse.md)**


## getAtsInterview

Retrieve a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAtsInterviewRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->interview->getAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest](../../Models/Operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsInterviewResponse](../../Models/Operations/GetAtsInterviewResponse.md)**


## listAtsInterviews

List all interviews

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListAtsInterviewsRequest();
    $request->applicationId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2562.12;
    $request->offset = 1185.02;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-28T09:19:25.744Z');

    $response = $sdk->interview->listAtsInterviews($request);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest](../../Models/Operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse](../../Models/Operations/ListAtsInterviewsResponse.md)**


## patchAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-11T21:35:40.790Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-28T19:11:29.616Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new Shared\PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-10T02:01:13.488Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-18T09:12:18.749Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->interview->patchAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest](../../Models/Operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse](../../Models/Operations/PatchAtsInterviewResponse.md)**


## removeAtsInterview

Remove a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveAtsInterviewRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->interview->removeAtsInterview($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest](../../Models/Operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse](../../Models/Operations/RemoveAtsInterviewResponse.md)**


## updateAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-06T10:37:46.574Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-29T10:34:23.230Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new Shared\PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T12:38:13.018Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-01T14:26:12.006Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->interview->updateAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest](../../Models/Operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse](../../Models/Operations/UpdateAtsInterviewResponse.md)**

