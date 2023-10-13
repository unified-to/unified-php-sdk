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
    $request->atsInterview->applicationId = 'pixellate arc';
    $request->atsInterview->candidateId = 'drat';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-24T16:48:42.126Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-17T22:03:34.997Z');
    $request->atsInterview->externalEventXref = 'harpsichord Roanoke Smart';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'redundant Account ubiquitous';
    $request->atsInterview->location = 'Davenport West nestle';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-03T12:23:41.502Z');
    $request->atsInterview->status = AtsInterviewStatus::Scheduled;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-30T09:38:42.807Z');
    $request->atsInterview->userIds = [
        'HTTP',
    ];
    $request->connectionId = 'Direct Sedan';

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
    $request->connectionId = 'syndicate longingly Mobility';
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
    $request->applicationId = 'Northeast';
    $request->connectionId = 'Avon';
    $request->limit = 1795.86;
    $request->offset = 8334.82;
    $request->order = 'granular';
    $request->query = 'West';
    $request->sort = 'Analyst Pickup';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-09T17:56:10.255Z');

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
    $request->atsInterview->applicationId = 'Idaho Francium Cambridgeshire';
    $request->atsInterview->candidateId = 'quantifying Regional';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-23T13:36:34.664Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-17T13:01:20.492Z');
    $request->atsInterview->externalEventXref = 'District Northeast';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'SCSI';
    $request->atsInterview->location = 'mope Avon';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-21T17:27:43.478Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-22T19:15:29.292Z');
    $request->atsInterview->userIds = [
        'Zloty',
    ];
    $request->connectionId = 'quirkily Liaison Metical';
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
    $request->connectionId = 'Polynesia redefine pfft';
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
    $request->atsInterview->applicationId = 'Loan Southeast omnis';
    $request->atsInterview->candidateId = 'Modern';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-24T14:14:45.020Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-29T12:49:59.631Z');
    $request->atsInterview->externalEventXref = 'female payment aw';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'incidentally Research';
    $request->atsInterview->location = 'female Technician watt';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-16T12:19:39.092Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-01T01:36:21.844Z');
    $request->atsInterview->userIds = [
        'Program',
    ];
    $request->connectionId = 'tensor what';
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

