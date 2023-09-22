# Interview

### Available Operations

* [deleteAtsConnectionIdInterviewId](#deleteatsconnectionidinterviewid) - Remove a interview
* [getAtsConnectionIdInterview](#getatsconnectionidinterview) - List all interviews
* [getAtsConnectionIdInterviewId](#getatsconnectionidinterviewid) - Retrieve a interview
* [patchAtsConnectionIdInterviewId](#patchatsconnectionidinterviewid) - Update a interview
* [postAtsConnectionIdInterview](#postatsconnectionidinterview) - Create a interview
* [putAtsConnectionIdInterviewId](#putatsconnectionidinterviewid) - Update a interview

## deleteAtsConnectionIdInterviewId

Remove a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdInterviewIdRequest();
    $request->connectionId = 'delectus';
    $request->id = '2631c7c0-f0f8-473f-9d5c-25fd3e0b4a4a';

    $response = $sdk->interview->deleteAtsConnectionIdInterviewId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdRequest](../../models/operations/DeleteAtsConnectionIdInterviewIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdResponse](../../models/operations/DeleteAtsConnectionIdInterviewIdResponse.md)**


## getAtsConnectionIdInterview

List all interviews

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdInterviewRequest();
    $request->applicationId = 'magnam';
    $request->connectionId = 'quia';
    $request->limit = 3556.74;
    $request->offset = 2199.11;
    $request->order = 'maxime';
    $request->query = 'amet';
    $request->sort = 'ipsa';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-24T14:17:37.096Z');

    $response = $sdk->interview->getAtsConnectionIdInterview($request);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewRequest](../../models/operations/GetAtsConnectionIdInterviewRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewResponse](../../models/operations/GetAtsConnectionIdInterviewResponse.md)**


## getAtsConnectionIdInterviewId

Retrieve a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdInterviewIdRequest();
    $request->connectionId = 'molestiae';
    $request->id = '11f42c7e-7dc5-448b-a09e-41a7a215ca12';

    $response = $sdk->interview->getAtsConnectionIdInterviewId($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdRequest](../../models/operations/GetAtsConnectionIdInterviewIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdResponse](../../models/operations/GetAtsConnectionIdInterviewIdResponse.md)**


## patchAtsConnectionIdInterviewId

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdInterviewIdRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'similique';
    $request->atsInterview->candidateId = 'labore';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-23T04:43:31.605Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-24T11:34:46.108Z');
    $request->atsInterview->externalEventXref = 'ipsam';
    $request->atsInterview->id = '9988192c-fd0c-477c-93e7-e7d4ee6e8b90';
    $request->atsInterview->jobId = 'distinctio';
    $request->atsInterview->location = 'similique';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-21T20:06:00.001Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-05T12:04:36.240Z');
    $request->atsInterview->userIds = [
        'qui',
    ];
    $request->connectionId = 'dolor';
    $request->id = '96703fec-31c5-4082-8d18-9a36a6b2d27e';

    $response = $sdk->interview->patchAtsConnectionIdInterviewId($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdRequest](../../models/operations/PatchAtsConnectionIdInterviewIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdResponse](../../models/operations/PatchAtsConnectionIdInterviewIdResponse.md)**


## postAtsConnectionIdInterview

Create a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'rerum';
    $request->atsInterview->candidateId = 'esse';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-12T13:17:35.720Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-01T13:53:05.333Z');
    $request->atsInterview->externalEventXref = 'iure';
    $request->atsInterview->id = '0c8fe46e-6177-4db9-9b3b-70ffbb6970ee';
    $request->atsInterview->jobId = 'odio';
    $request->atsInterview->location = 'nihil';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-02T09:57:16.835Z');
    $request->atsInterview->status = AtsInterviewStatus::Scheduled;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-30T15:07:50.024Z');
    $request->atsInterview->userIds = [
        'occaecati',
    ];
    $request->connectionId = 'iusto';

    $response = $sdk->interview->postAtsConnectionIdInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewRequest](../../models/operations/PostAtsConnectionIdInterviewRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewResponse](../../models/operations/PostAtsConnectionIdInterviewResponse.md)**


## putAtsConnectionIdInterviewId

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdInterviewIdRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'debitis';
    $request->atsInterview->candidateId = 'voluptatibus';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-14T02:20:51.056Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-16T22:18:24.333Z');
    $request->atsInterview->externalEventXref = 'vel';
    $request->atsInterview->id = 'e61b0d30-8714-4c20-a3d9-8637ca85c3fe';
    $request->atsInterview->jobId = 'autem';
    $request->atsInterview->location = 'nostrum';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-10T12:32:11.181Z');
    $request->atsInterview->status = AtsInterviewStatus::Scheduled;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-12-05T08:52:32.456Z');
    $request->atsInterview->userIds = [
        'culpa',
    ];
    $request->connectionId = 'reiciendis';
    $request->id = '94a7c98f-13af-428d-b2cf-2bf4f3ded356';

    $response = $sdk->interview->putAtsConnectionIdInterviewId($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdRequest](../../models/operations/PutAtsConnectionIdInterviewIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdResponse](../../models/operations/PutAtsConnectionIdInterviewIdResponse.md)**

