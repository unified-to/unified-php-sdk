# Ats
(*ats*)

### Available Operations

* [deleteAtsConnectionIdApplicationId](#deleteatsconnectionidapplicationid) - Remove an application
* [deleteAtsConnectionIdCandidateId](#deleteatsconnectionidcandidateid) - Remove a candidate
* [deleteAtsConnectionIdInterviewId](#deleteatsconnectionidinterviewid) - Remove a interview
* [deleteAtsConnectionIdJobId](#deleteatsconnectionidjobid) - Remove a job
* [deleteAtsConnectionIdScorecardId](#deleteatsconnectionidscorecardid) - Remove a scorecard
* [getAtsConnectionIdApplication](#getatsconnectionidapplication) - List all applications
* [getAtsConnectionIdApplicationId](#getatsconnectionidapplicationid) - Retrieve an application
* [getAtsConnectionIdCandidate](#getatsconnectionidcandidate) - List all candidates
* [getAtsConnectionIdCandidateId](#getatsconnectionidcandidateid) - Retrieve a candidate
* [getAtsConnectionIdInterview](#getatsconnectionidinterview) - List all interviews
* [getAtsConnectionIdInterviewId](#getatsconnectionidinterviewid) - Retrieve a interview
* [getAtsConnectionIdJob](#getatsconnectionidjob) - List all jobs
* [getAtsConnectionIdJobId](#getatsconnectionidjobid) - Retrieve a job
* [getAtsConnectionIdScorecard](#getatsconnectionidscorecard) - List all scorecards
* [getAtsConnectionIdScorecardId](#getatsconnectionidscorecardid) - Retrieve a scorecard
* [patchAtsConnectionIdApplicationId](#patchatsconnectionidapplicationid) - Update an application
* [patchAtsConnectionIdCandidateId](#patchatsconnectionidcandidateid) - Update a candidate
* [patchAtsConnectionIdInterviewId](#patchatsconnectionidinterviewid) - Update a interview
* [patchAtsConnectionIdJobId](#patchatsconnectionidjobid) - Update a job
* [patchAtsConnectionIdScorecardId](#patchatsconnectionidscorecardid) - Update a scorecard
* [postAtsConnectionIdApplication](#postatsconnectionidapplication) - Create an application
* [postAtsConnectionIdCandidate](#postatsconnectionidcandidate) - Create a candidate
* [postAtsConnectionIdInterview](#postatsconnectionidinterview) - Create a interview
* [postAtsConnectionIdJob](#postatsconnectionidjob) - Create a job
* [postAtsConnectionIdScorecard](#postatsconnectionidscorecard) - Create a scorecard
* [putAtsConnectionIdApplicationId](#putatsconnectionidapplicationid) - Update an application
* [putAtsConnectionIdCandidateId](#putatsconnectionidcandidateid) - Update a candidate
* [putAtsConnectionIdInterviewId](#putatsconnectionidinterviewid) - Update a interview
* [putAtsConnectionIdJobId](#putatsconnectionidjobid) - Update a job
* [putAtsConnectionIdScorecardId](#putatsconnectionidscorecardid) - Update a scorecard

## deleteAtsConnectionIdApplicationId

Remove an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'markets sievert meh';
    $request->id = '<ID>';

    $response = $sdk->ats->deleteAtsConnectionIdApplicationId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest](../../models/operations/DeleteAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdResponse](../../models/operations/DeleteAtsConnectionIdApplicationIdResponse.md)**


## deleteAtsConnectionIdCandidateId

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'multimedia';
    $request->id = '<ID>';

    $response = $sdk->ats->deleteAtsConnectionIdCandidateId($request);

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
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest](../../models/operations/DeleteAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdResponse](../../models/operations/DeleteAtsConnectionIdCandidateIdResponse.md)**


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
    $request->connectionId = 'redundant Health Hayes';
    $request->id = '<ID>';

    $response = $sdk->ats->deleteAtsConnectionIdInterviewId($request);

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


## deleteAtsConnectionIdJobId

Remove a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdJobIdRequest();
    $request->connectionId = 'Sedan Bedfordshire Hybrid';
    $request->id = '<ID>';

    $response = $sdk->ats->deleteAtsConnectionIdJobId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest](../../models/operations/DeleteAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdResponse](../../models/operations/DeleteAtsConnectionIdJobIdResponse.md)**


## deleteAtsConnectionIdScorecardId

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'Agent intrepid';
    $request->id = '<ID>';

    $response = $sdk->ats->deleteAtsConnectionIdScorecardId($request);

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
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdRequest](../../models/operations/DeleteAtsConnectionIdScorecardIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdResponse](../../models/operations/DeleteAtsConnectionIdScorecardIdResponse.md)**


## getAtsConnectionIdApplication

List all applications

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationRequest();
    $request->candidateId = 'turquoise';
    $request->connectionId = 'Regional Bedfordshire';
    $request->jobId = 'Northwest portal Electric';
    $request->limit = 576.8;
    $request->offset = 7467.13;
    $request->order = 'Architect';
    $request->query = 'loosely contingency';
    $request->sort = 'female';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-05T13:59:23.348Z');

    $response = $sdk->ats->getAtsConnectionIdApplication($request);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest](../../models/operations/GetAtsConnectionIdApplicationRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationResponse](../../models/operations/GetAtsConnectionIdApplicationResponse.md)**


## getAtsConnectionIdApplicationId

Retrieve an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'Buckinghamshire functionalities';
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest](../../models/operations/GetAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdResponse](../../models/operations/GetAtsConnectionIdApplicationIdResponse.md)**


## getAtsConnectionIdCandidate

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateRequest();
    $request->connectionId = 'Northwest forceful Moore';
    $request->limit = 2623.89;
    $request->offset = 7811.91;
    $request->order = 'Mouse whether deploy';
    $request->query = 'pink';
    $request->sort = 'huzzah thistle';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-13T15:14:03.645Z');

    $response = $sdk->ats->getAtsConnectionIdCandidate($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest](../../models/operations/GetAtsConnectionIdCandidateRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateResponse](../../models/operations/GetAtsConnectionIdCandidateResponse.md)**


## getAtsConnectionIdCandidateId

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'ha Loan';
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsConnectionIdCandidateId($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest](../../models/operations/GetAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdResponse](../../models/operations/GetAtsConnectionIdCandidateIdResponse.md)**


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
    $request->applicationId = 'Fresh Pickup converse';
    $request->connectionId = 'vortals';
    $request->limit = 5167.08;
    $request->offset = 6488.61;
    $request->order = 'Oregon Metal';
    $request->query = 'Account';
    $request->sort = 'haptic';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-23T19:46:35.825Z');

    $response = $sdk->ats->getAtsConnectionIdInterview($request);

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
    $request->connectionId = 'Loan Gorgeous lux';
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsConnectionIdInterviewId($request);

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


## getAtsConnectionIdJob

List all jobs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobRequest();
    $request->connectionId = 'City katal';
    $request->limit = 3542.62;
    $request->offset = 5417.97;
    $request->order = 'publisher';
    $request->query = 'Folding';
    $request->sort = 'Kip gross recontextualize';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-12T03:36:20.050Z');

    $response = $sdk->ats->getAtsConnectionIdJob($request);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest](../../models/operations/GetAtsConnectionIdJobRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobResponse](../../models/operations/GetAtsConnectionIdJobResponse.md)**


## getAtsConnectionIdJobId

Retrieve a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobIdRequest();
    $request->connectionId = 'Jazz';
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest](../../models/operations/GetAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdResponse](../../models/operations/GetAtsConnectionIdJobIdResponse.md)**


## getAtsConnectionIdScorecard

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdScorecardRequest();
    $request->applicationId = 'Licensed deep';
    $request->candidateId = 'happily';
    $request->connectionId = 'lunch accusamus';
    $request->interviewId = 'for famously Southwest';
    $request->limit = 950.05;
    $request->offset = 6133.23;
    $request->order = 'withdrawal';
    $request->query = 'Bicycle copy Bronze';
    $request->sort = 'ouch non ut';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-01T09:53:52.927Z');

    $response = $sdk->ats->getAtsConnectionIdScorecard($request);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardRequest](../../models/operations/GetAtsConnectionIdScorecardRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardResponse](../../models/operations/GetAtsConnectionIdScorecardResponse.md)**


## getAtsConnectionIdScorecardId

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'East mobile Mini';
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsConnectionIdScorecardId($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdRequest](../../models/operations/GetAtsConnectionIdScorecardIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdResponse](../../models/operations/GetAtsConnectionIdScorecardIdResponse.md)**


## patchAtsConnectionIdApplicationId

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-17T09:51:42.165Z');
    $request->atsApplication->candidateId = 'North et beyond';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-08T08:26:22.845Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'ick Sausages Bronze';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-18T00:47:25.469Z');
    $request->atsApplication->rejectedReason = 'Avon Sum quis';
    $request->atsApplication->source = 'Carolina Wooden Pop';
    $request->atsApplication->status = AtsApplicationStatus::Hired;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-20T22:05:46.009Z');
    $request->connectionId = 'Baby Paucek';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest](../../models/operations/PatchAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdResponse](../../models/operations/PatchAtsConnectionIdApplicationIdResponse.md)**


## patchAtsConnectionIdCandidateId

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'closely Goyette plus';
    $request->atsCandidate->address->address2 = 'culpa';
    $request->atsCandidate->address->city = 'Darrinshire';
    $request->atsCandidate->address->country = 'Mongolia';
    $request->atsCandidate->address->countryCode = 'GW';
    $request->atsCandidate->address->postalCode = '05275';
    $request->atsCandidate->address->region = 'TLS calculating';
    $request->atsCandidate->address->regionCode = 'up Argon Internal';
    $request->atsCandidate->companyName = 'Fadel, Schulist and Koss';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-09T07:16:54.728Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Home';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Cadillac Elegant';
    $request->atsCandidate->name = 'Tricycle Yttrium Hybrid';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'Blues',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'whether Cadillac';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-01T02:58:46.894Z');
    $request->connectionId = 'Hudson East';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsConnectionIdCandidateId($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest](../../models/operations/PatchAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdResponse](../../models/operations/PatchAtsConnectionIdCandidateIdResponse.md)**


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
    $request->atsInterview->applicationId = 'SSD green pascal';
    $request->atsInterview->candidateId = 'Buckinghamshire example';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-24T08:30:07.073Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-27T04:06:46.373Z');
    $request->atsInterview->externalEventXref = 'apropos Gadolinium';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'transgender transmitting';
    $request->atsInterview->location = 'Investor synthesizing';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-19T01:51:02.213Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-21T17:38:09.113Z');
    $request->atsInterview->userIds = [
        'Honda',
    ];
    $request->connectionId = 'Myrl Dram Trail';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsConnectionIdInterviewId($request);

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


## patchAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-08T22:05:20.134Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-25T05:01:57.220Z');
    $request->atsJob->departments = [
        'jaunty',
    ];
    $request->atsJob->description = 'Visionary human-resource framework';
    $request->atsJob->employmentType = AtsJobEmploymentType::Casual;
    $request->atsJob->hiringManagerIds = [
        'Kia',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'Ferrari Facilitator';
    $request->atsJob->name = 'redundant Towels Mendelevium';
    $request->atsJob->publicJobUrls = [
        'Manager',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Grand',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Archived;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-18T01:50:37.635Z');
    $request->connectionId = 'Account Copernicium at';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest](../../models/operations/PatchAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdResponse](../../models/operations/PatchAtsConnectionIdJobIdResponse.md)**


## patchAtsConnectionIdScorecardId

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdScorecardIdRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'Carter Hatchback functionalities';
    $request->atsScorecard->candidateId = 'disagree gold New';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T15:11:07.692Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'blue';
    $request->atsScorecard->interviewerId = 'North Buckinghamshire blur';
    $request->atsScorecard->jobId = 'kelvin hack Fantastic';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-18T04:49:38.005Z');
    $request->connectionId = 'hacking meter';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsConnectionIdScorecardId($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdRequest](../../models/operations/PatchAtsConnectionIdScorecardIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdResponse](../../models/operations/PatchAtsConnectionIdScorecardIdResponse.md)**


## postAtsConnectionIdApplication

Create an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-26T15:24:28.979Z');
    $request->atsApplication->candidateId = 'solid';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-13T17:17:33.049Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'Gloves Pizza virtual';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-27T18:41:56.821Z');
    $request->atsApplication->rejectedReason = 'Northwest Kids';
    $request->atsApplication->source = 'Human Tasty Loan';
    $request->atsApplication->status = AtsApplicationStatus::New;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-01T21:08:50.319Z');
    $request->connectionId = 'Jazz';

    $response = $sdk->ats->postAtsConnectionIdApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest](../../models/operations/PostAtsConnectionIdApplicationRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationResponse](../../models/operations/PostAtsConnectionIdApplicationResponse.md)**


## postAtsConnectionIdCandidate

Create a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'incubate';
    $request->atsCandidate->address->address2 = 'azure Trans';
    $request->atsCandidate->address->city = 'Port Rory';
    $request->atsCandidate->address->country = 'El Salvador';
    $request->atsCandidate->address->countryCode = 'CX';
    $request->atsCandidate->address->postalCode = '54222-0235';
    $request->atsCandidate->address->region = 'modi fooey';
    $request->atsCandidate->address->regionCode = 'Metal TCP incidunt';
    $request->atsCandidate->companyName = 'McCullough, Rosenbaum and Daugherty';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-07T05:55:59.357Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'likewise withdrawal auxiliary';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'though North';
    $request->atsCandidate->name = 'East Jewelery';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'hm',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Sausages';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-09T12:40:16.637Z');
    $request->connectionId = 'Rubber Gender';

    $response = $sdk->ats->postAtsConnectionIdCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest](../../models/operations/PostAtsConnectionIdCandidateRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateResponse](../../models/operations/PostAtsConnectionIdCandidateResponse.md)**


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
    $request->atsInterview->applicationId = 'round Hat Savings';
    $request->atsInterview->candidateId = 'Northeast';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T10:33:09.160Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-12T23:57:19.974Z');
    $request->atsInterview->externalEventXref = 'platforms';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'payment panel Identity';
    $request->atsInterview->location = 'Northwest Buckinghamshire';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-02T05:07:18.592Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-13T16:35:04.177Z');
    $request->atsInterview->userIds = [
        'Chevrolet',
    ];
    $request->connectionId = 'Shoes Northeast SMTP';

    $response = $sdk->ats->postAtsConnectionIdInterview($request);

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


## postAtsConnectionIdJob

Create a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-20T16:01:17.966Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-10T02:25:47.743Z');
    $request->atsJob->departments = [
        'Gasoline',
    ];
    $request->atsJob->description = 'Self-enabling hybrid capacity';
    $request->atsJob->employmentType = AtsJobEmploymentType::Freelance;
    $request->atsJob->hiringManagerIds = [
        'kelvin',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'upwardly';
    $request->atsJob->name = 'Diesel virtual';
    $request->atsJob->publicJobUrls = [
        'appetiser',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'scale',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-02T08:41:47.798Z');
    $request->connectionId = 'crossly Krona perfectly';

    $response = $sdk->ats->postAtsConnectionIdJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest](../../models/operations/PostAtsConnectionIdJobRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobResponse](../../models/operations/PostAtsConnectionIdJobResponse.md)**


## postAtsConnectionIdScorecard

Create a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'female bah';
    $request->atsScorecard->candidateId = 'if since';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-26T00:06:29.981Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'invoice';
    $request->atsScorecard->interviewerId = 'male';
    $request->atsScorecard->jobId = 'Accountability';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::StrongYes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-04T17:15:51.015Z');
    $request->connectionId = 'Legacy tan';

    $response = $sdk->ats->postAtsConnectionIdScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardRequest](../../models/operations/PostAtsConnectionIdScorecardRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardResponse](../../models/operations/PostAtsConnectionIdScorecardResponse.md)**


## putAtsConnectionIdApplicationId

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-15T22:25:51.833Z');
    $request->atsApplication->candidateId = 'farad Indianapolis';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T21:03:58.880Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'enable foreground';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-06T11:41:30.414Z');
    $request->atsApplication->rejectedReason = 'virtual North plum';
    $request->atsApplication->source = 'Fort solid';
    $request->atsApplication->status = AtsApplicationStatus::Submitted;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-21T04:47:57.079Z');
    $request->connectionId = 'Southeast';
    $request->id = '<ID>';

    $response = $sdk->ats->putAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest](../../models/operations/PutAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdResponse](../../models/operations/PutAtsConnectionIdApplicationIdResponse.md)**


## putAtsConnectionIdCandidateId

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'archive';
    $request->atsCandidate->address->address2 = 'Specialist Kyat';
    $request->atsCandidate->address->city = 'New Dennis';
    $request->atsCandidate->address->country = 'Mauritius';
    $request->atsCandidate->address->countryCode = 'TL';
    $request->atsCandidate->address->postalCode = '49105-9909';
    $request->atsCandidate->address->region = 'copy olive';
    $request->atsCandidate->address->regionCode = 'withdrawal cumque person';
    $request->atsCandidate->companyName = 'Kuhn and Sons';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-28T10:51:00.922Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Kenyan';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Investment';
    $request->atsCandidate->name = 'Concrete homogeneous';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'Reggae',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Southwest Savings program';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-27T12:33:33.410Z');
    $request->connectionId = 'collaborative';
    $request->id = '<ID>';

    $response = $sdk->ats->putAtsConnectionIdCandidateId($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest](../../models/operations/PutAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdResponse](../../models/operations/PutAtsConnectionIdCandidateIdResponse.md)**


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
    $request->atsInterview->applicationId = 'Generic capacitor';
    $request->atsInterview->candidateId = 'Road disbelieve';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-22T01:57:06.573Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-28T02:29:32.144Z');
    $request->atsInterview->externalEventXref = 'architectures';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'Casper 1080p South';
    $request->atsInterview->location = 'program siemens Cis';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-14T15:20:41.084Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-14T19:59:39.905Z');
    $request->atsInterview->userIds = [
        'East',
    ];
    $request->connectionId = 'ASCII yet Hybrid';
    $request->id = '<ID>';

    $response = $sdk->ats->putAtsConnectionIdInterviewId($request);

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


## putAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-03T19:59:38.491Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-31T19:51:50.974Z');
    $request->atsJob->departments = [
        'Keyboard',
    ];
    $request->atsJob->description = 'Upgradable scalable workforce';
    $request->atsJob->employmentType = AtsJobEmploymentType::Seasonal;
    $request->atsJob->hiringManagerIds = [
        'meanwhile',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'Dodge Outdoors BMW';
    $request->atsJob->name = 'Division Coordinator lighthearted';
    $request->atsJob->publicJobUrls = [
        'online',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Bicycle',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-18T14:37:16.689Z');
    $request->connectionId = 'Northwest';
    $request->id = '<ID>';

    $response = $sdk->ats->putAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest](../../models/operations/PutAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdResponse](../../models/operations/PutAtsConnectionIdJobIdResponse.md)**


## putAtsConnectionIdScorecardId

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdScorecardIdRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'East Granite';
    $request->atsScorecard->candidateId = 'South';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-02T12:33:41.490Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'Texas Technetium hack';
    $request->atsScorecard->interviewerId = 'Adventure Kyrgyz Organic';
    $request->atsScorecard->jobId = 'Home Dynamic Integration';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::No;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-13T03:01:57.066Z');
    $request->connectionId = 'Transexual Manager Rap';
    $request->id = '<ID>';

    $response = $sdk->ats->putAtsConnectionIdScorecardId($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdRequest](../../models/operations/PutAtsConnectionIdScorecardIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdResponse](../../models/operations/PutAtsConnectionIdScorecardIdResponse.md)**

