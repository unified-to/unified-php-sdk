# Interview
(*interview*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'Metrics';
    $request->atsInterview->candidateId = 'Bar';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-05T10:11:26.881Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-24T16:48:42.126Z');
    $request->atsInterview->externalEventXref = 'azure';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'harpsichord';
    $request->atsInterview->location = 'Roanoke';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-19T04:12:52.712Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T17:10:33.906Z');
    $request->atsInterview->userIds = [
        'redundant',
    ];
    $request->connectionId = 'Account';

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest](../../models/operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse](../../models/operations/CreateAtsInterviewResponse.md)**


## getAtsInterview

Retrieve a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsInterviewRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsInterviewRequest();
    $request->connectionId = 'yum';
    $request->fields = [
        'programming',
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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest](../../models/operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsInterviewResponse](../../models/operations/GetAtsInterviewResponse.md)**


## listAtsInterviews

List all interviews

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsInterviewsRequest();
    $request->applicationId = 'Bronze';
    $request->connectionId = 'Wooden';
    $request->fields = [
        'Avon',
    ];
    $request->limit = 1795.86;
    $request->offset = 8334.82;
    $request->order = 'Elegant';
    $request->query = 'evolve';
    $request->sort = 'West';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-08T07:24:23.420Z');

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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest](../../models/operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse](../../models/operations/ListAtsInterviewsResponse.md)**


## patchAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'courageously';
    $request->atsInterview->candidateId = 'Handmade';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-18T09:12:18.749Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-14T21:48:10.753Z');
    $request->atsInterview->externalEventXref = 'hen';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'quantifying';
    $request->atsInterview->location = 'Regional';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-23T13:36:34.664Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-19T08:03:32.340Z');
    $request->atsInterview->userIds = [
        'District',
    ];
    $request->connectionId = 'Northeast';
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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest](../../models/operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse](../../models/operations/PatchAtsInterviewResponse.md)**


## removeAtsInterview

Remove a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsInterviewRequest();
    $request->connectionId = 'green';
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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest](../../models/operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse](../../models/operations/RemoveAtsInterviewResponse.md)**


## updateAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'maroon';
    $request->atsInterview->candidateId = 'maroon';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-01T14:26:12.006Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T11:41:49.964Z');
    $request->atsInterview->externalEventXref = 'omnis';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'Gorgeous';
    $request->atsInterview->location = 'magenta';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-29T12:28:44.106Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-27T22:37:05.474Z');
    $request->atsInterview->userIds = [
        'aw',
    ];
    $request->connectionId = 'solid';
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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest](../../models/operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse](../../models/operations/UpdateAtsInterviewResponse.md)**

