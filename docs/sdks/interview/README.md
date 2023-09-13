# interview

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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdInterviewIdRequest();
    $request->connectionId = 'incidunt';
    $request->id = '60a77ece-b26d-410f-9ef2-631c7c0f0f87';

    $requestSecurity = new DeleteAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->deleteAtsConnectionIdInterviewId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdRequest](../../models/operations/DeleteAtsConnectionIdInterviewIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdSecurity](../../models/operations/DeleteAtsConnectionIdInterviewIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdInterviewRequest();
    $request->applicationId = 'dolorem';
    $request->connectionId = 'sapiente';
    $request->limit = 6219.13;
    $request->offset = 8159.77;
    $request->order = 'veniam';
    $request->query = 'eligendi';
    $request->sort = 'aspernatur';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-01-06');

    $requestSecurity = new GetAtsConnectionIdInterviewSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->getAtsConnectionIdInterview($request, $requestSecurity);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewRequest](../../models/operations/GetAtsConnectionIdInterviewRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewSecurity](../../models/operations/GetAtsConnectionIdInterviewSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdInterviewIdRequest();
    $request->connectionId = 'illum';
    $request->id = '3e0b4a4a-4253-4c30-a571-1f42c7e7dc54';

    $requestSecurity = new GetAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->getAtsConnectionIdInterviewId($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdRequest](../../models/operations/GetAtsConnectionIdInterviewIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewIdSecurity](../../models/operations/GetAtsConnectionIdInterviewIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdInterviewIdRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'voluptatum';
    $request->atsInterview->candidateId = 'cum';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2022-12-03');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2021-02-23');
    $request->atsInterview->externalEventXref = 'numquam';
    $request->atsInterview->id = '1a7a215c-a12a-44ba-9d59-988192cfd0c7';
    $request->atsInterview->jobId = 'iusto';
    $request->atsInterview->location = 'eligendi';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2022-10-16');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-02-14');
    $request->atsInterview->userIds = [
        'dignissimos',
    ];
    $request->connectionId = 'facere';
    $request->id = '4ee6e8b9-0bac-4384-a239-6703fec31c50';

    $requestSecurity = new PatchAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->patchAtsConnectionIdInterviewId($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdRequest](../../models/operations/PatchAtsConnectionIdInterviewIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdInterviewIdSecurity](../../models/operations/PatchAtsConnectionIdInterviewIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'deleniti';
    $request->atsInterview->candidateId = 'qui';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2022-03-08');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2022-06-19');
    $request->atsInterview->externalEventXref = 'perspiciatis';
    $request->atsInterview->id = 'a36a6b2d-27eb-4707-aa60-c8fe46e6177d';
    $request->atsInterview->jobId = 'quidem';
    $request->atsInterview->location = 'iste';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2020-10-04');
    $request->atsInterview->status = AtsInterviewStatus::Scheduled;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-06');
    $request->atsInterview->userIds = [
        'eaque',
    ];
    $request->connectionId = 'voluptatibus';

    $requestSecurity = new PostAtsConnectionIdInterviewSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->postAtsConnectionIdInterview($request, $requestSecurity);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewRequest](../../models/operations/PostAtsConnectionIdInterviewRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdInterviewSecurity](../../models/operations/PostAtsConnectionIdInterviewSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdInterviewIdRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'voluptatibus';
    $request->atsInterview->candidateId = 'cum';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2022-03-19');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2022-01-02');
    $request->atsInterview->externalEventXref = 'aperiam';
    $request->atsInterview->id = 'ee770e36-097e-4f7c-a06e-61b0d308714c';
    $request->atsInterview->jobId = 'consequuntur';
    $request->atsInterview->location = 'perferendis';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2022-07-25');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2021-11-29');
    $request->atsInterview->userIds = [
        'ea',
    ];
    $request->connectionId = 'sequi';
    $request->id = '7ca85c3f-e655-474d-baf9-4a7c98f13af2';

    $requestSecurity = new PutAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->interview->putAtsConnectionIdInterviewId($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdRequest](../../models/operations/PutAtsConnectionIdInterviewIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdSecurity](../../models/operations/PutAtsConnectionIdInterviewIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdInterviewIdResponse](../../models/operations/PutAtsConnectionIdInterviewIdResponse.md)**

