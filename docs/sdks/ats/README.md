# ats

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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'minima';
    $request->id = '0fb008c4-2e14-41aa-8366-c8dd6b144290';

    $requestSecurity = new DeleteAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->deleteAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest](../../models/operations/DeleteAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdSecurity](../../models/operations/DeleteAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'molestiae';
    $request->id = '474778a7-bd46-46d2-8c10-ab3cdca42519';

    $requestSecurity = new DeleteAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->deleteAtsConnectionIdCandidateId($request, $requestSecurity);

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
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest](../../models/operations/DeleteAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdSecurity](../../models/operations/DeleteAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdInterviewIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdInterviewIdRequest();
    $request->connectionId = 'consequatur';
    $request->id = '4e523c7e-0bc7-4178-a479-6f2a70c68828';

    $requestSecurity = new DeleteAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->deleteAtsConnectionIdInterviewId($request, $requestSecurity);

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


## deleteAtsConnectionIdJobId

Remove a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdJobIdRequest();
    $request->connectionId = 'fugit';
    $request->id = 'aa482562-f222-4e98-97ee-17cbe61e6b7b';

    $requestSecurity = new DeleteAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->deleteAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest](../../models/operations/DeleteAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdSecurity](../../models/operations/DeleteAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'occaecati';
    $request->id = '5bc0ab3c-20c4-4f37-89fd-871f99dd2efd';

    $requestSecurity = new DeleteAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->deleteAtsConnectionIdScorecardId($request, $requestSecurity);

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
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdRequest](../../models/operations/DeleteAtsConnectionIdScorecardIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdSecurity](../../models/operations/DeleteAtsConnectionIdScorecardIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationRequest();
    $request->candidateId = 'veritatis';
    $request->connectionId = 'consequuntur';
    $request->jobId = 'quasi';
    $request->limit = 6288.99;
    $request->offset = 6336.08;
    $request->order = 'aliquid';
    $request->query = 'tenetur';
    $request->sort = 'quae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2021-09-23');

    $requestSecurity = new GetAtsConnectionIdApplicationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdApplication($request, $requestSecurity);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest](../../models/operations/GetAtsConnectionIdApplicationRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationSecurity](../../models/operations/GetAtsConnectionIdApplicationSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'in';
    $request->id = '4bdb04f1-5756-4082-968e-a19f1d170513';

    $requestSecurity = new GetAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest](../../models/operations/GetAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdSecurity](../../models/operations/GetAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateRequest();
    $request->connectionId = 'adipisci';
    $request->limit = 6144.65;
    $request->offset = 8395.13;
    $request->order = 'accusantium';
    $request->query = 'rem';
    $request->sort = 'aut';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-02-21');

    $requestSecurity = new GetAtsConnectionIdCandidateSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdCandidate($request, $requestSecurity);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest](../../models/operations/GetAtsConnectionIdCandidateRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateSecurity](../../models/operations/GetAtsConnectionIdCandidateSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'mollitia';
    $request->id = '1840394c-2607-41f9-bf5f-0642dac7af51';

    $requestSecurity = new GetAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest](../../models/operations/GetAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdSecurity](../../models/operations/GetAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdInterviewSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdInterviewRequest();
    $request->applicationId = 'quaerat';
    $request->connectionId = 'porro';
    $request->limit = 8018.36;
    $request->offset = 2883.98;
    $request->order = 'ab';
    $request->query = 'adipisci';
    $request->sort = 'fuga';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-03-29');

    $requestSecurity = new GetAtsConnectionIdInterviewSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdInterview($request, $requestSecurity);

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
    $request->connectionId = 'velit';
    $request->id = 'aae8d678-64db-4b67-9fd5-e60b375ed4f6';

    $requestSecurity = new GetAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdInterviewId($request, $requestSecurity);

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


## getAtsConnectionIdJob

List all jobs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobRequest();
    $request->connectionId = 'reiciendis';
    $request->limit = 6971.42;
    $request->offset = 9049.49;
    $request->order = 'necessitatibus';
    $request->query = 'dolore';
    $request->sort = 'sunt';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-04-11');

    $requestSecurity = new GetAtsConnectionIdJobSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdJob($request, $requestSecurity);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest](../../models/operations/GetAtsConnectionIdJobRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobSecurity](../../models/operations/GetAtsConnectionIdJobSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobIdRequest();
    $request->connectionId = 'non';
    $request->id = '317fe35b-60eb-41ea-8265-55ba3c28744e';

    $requestSecurity = new GetAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest](../../models/operations/GetAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdSecurity](../../models/operations/GetAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdScorecardRequest();
    $request->applicationId = 'temporibus';
    $request->candidateId = 'ullam';
    $request->connectionId = 'adipisci';
    $request->interviewId = 'cum';
    $request->limit = 5023.89;
    $request->offset = 5553.61;
    $request->order = 'hic';
    $request->query = 'nesciunt';
    $request->sort = 'culpa';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2021-04-07');

    $requestSecurity = new GetAtsConnectionIdScorecardSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdScorecard($request, $requestSecurity);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardRequest](../../models/operations/GetAtsConnectionIdScorecardRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardSecurity](../../models/operations/GetAtsConnectionIdScorecardSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'totam';
    $request->id = 'f5c0b2f2-fb7b-4194-a276-b26916fe1f08';

    $requestSecurity = new GetAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->getAtsConnectionIdScorecardId($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdRequest](../../models/operations/GetAtsConnectionIdScorecardIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdScorecardIdSecurity](../../models/operations/GetAtsConnectionIdScorecardIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d', '2022-03-06');
    $request->atsApplication->candidateId = 'sed';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-26');
    $request->atsApplication->id = 'e3698f44-7f60-43e8-b445-e80ca55efd20';
    $request->atsApplication->jobId = 'saepe';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d', '2022-09-02');
    $request->atsApplication->rejectedReason = 'in';
    $request->atsApplication->source = 'officiis';
    $request->atsApplication->status = AtsApplicationStatus::Reviewing;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-04-21');
    $request->connectionId = 'praesentium';
    $request->id = 'b6a89fbe-3a5a-4a8e-8824-d0ab4075088e';

    $requestSecurity = new PatchAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->patchAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest](../../models/operations/PatchAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdSecurity](../../models/operations/PatchAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'corporis';
    $request->atsCandidate->address->address2 = 'et';
    $request->atsCandidate->address->city = 'Gustville';
    $request->atsCandidate->address->country = 'Angola';
    $request->atsCandidate->address->countryCode = 'IO';
    $request->atsCandidate->address->postalCode = '96029';
    $request->atsCandidate->address->region = 'dolorem';
    $request->atsCandidate->address->regionCode = 'harum';
    $request->atsCandidate->companyName = 'dicta';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-04');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'labore';
    $request->atsCandidate->id = 'b8abf603-a79f-49df-a0ab-7da8a50ce187';
    $request->atsCandidate->imageUrl = 'asperiores';
    $request->atsCandidate->name = 'Sam Powlowski IV';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'amet',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Dr.';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-18');
    $request->connectionId = 'error';
    $request->id = 'eee9526f-8d98-46e8-81ea-d4f0e1012563';

    $requestSecurity = new PatchAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->patchAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest](../../models/operations/PatchAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdSecurity](../../models/operations/PatchAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
    $request->atsInterview->applicationId = 'a';
    $request->atsInterview->candidateId = 'molestias';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2022-02-04');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2022-06-03');
    $request->atsInterview->externalEventXref = 'officiis';
    $request->atsInterview->id = '973e922a-57a1-45be-be06-0807e2b6e3ab';
    $request->atsInterview->jobId = 'voluptatum';
    $request->atsInterview->location = 'rem';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2022-09-05');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-08-21');
    $request->atsInterview->userIds = [
        'perspiciatis',
    ];
    $request->connectionId = 'nihil';
    $request->id = 'a60ff2a5-4a31-4e94-b64a-3e865e7956f9';

    $requestSecurity = new PatchAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->patchAtsConnectionIdInterviewId($request, $requestSecurity);

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


## patchAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2022-08-24');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2022-05-06');
    $request->atsJob->departments = [
        'nostrum',
    ];
    $request->atsJob->description = 'mollitia';
    $request->atsJob->employmentType = AtsJobEmploymentType::Volunteer;
    $request->atsJob->hiringManagerIds = [
        'possimus',
    ];
    $request->atsJob->id = 'a660ff57-bfaa-4d4f-9efc-1b4512c10326';
    $request->atsJob->languageLocale = 'eius';
    $request->atsJob->name = 'Wilfred Rutherford';
    $request->atsJob->publicJobUrls = [
        'eum',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'dicta',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-02');
    $request->connectionId = 'provident';
    $request->id = 'ebfd0e9f-e6c6-432c-a3ae-d0117996312f';

    $requestSecurity = new PatchAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->patchAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest](../../models/operations/PatchAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdSecurity](../../models/operations/PatchAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdScorecardIdRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'nulla';
    $request->atsScorecard->candidateId = 'necessitatibus';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d', '2022-09-24');
    $request->atsScorecard->id = '771778ff-61d0-4174-b636-0a15db6a6606';
    $request->atsScorecard->interviewId = 'voluptas';
    $request->atsScorecard->interviewerId = 'iste';
    $request->atsScorecard->jobId = 'id';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d', '2021-05-10');
    $request->connectionId = 'voluptates';
    $request->id = 'aab5851d-6c64-45b0-8b61-891baa0fe1ad';

    $requestSecurity = new PatchAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->patchAtsConnectionIdScorecardId($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdRequest](../../models/operations/PatchAtsConnectionIdScorecardIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdScorecardIdSecurity](../../models/operations/PatchAtsConnectionIdScorecardIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d', '2022-11-30');
    $request->atsApplication->candidateId = 'alias';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d', '2021-02-15');
    $request->atsApplication->id = '6f8c5f35-0d8c-4db5-a341-814301042181';
    $request->atsApplication->jobId = 'dolor';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d', '2021-11-22');
    $request->atsApplication->rejectedReason = 'consequuntur';
    $request->atsApplication->source = 'ipsa';
    $request->atsApplication->status = AtsApplicationStatus::ThirdInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d', '2020-09-06');
    $request->connectionId = 'officiis';

    $requestSecurity = new PostAtsConnectionIdApplicationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->postAtsConnectionIdApplication($request, $requestSecurity);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest](../../models/operations/PostAtsConnectionIdApplicationRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationSecurity](../../models/operations/PostAtsConnectionIdApplicationSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'esse';
    $request->atsCandidate->address->address2 = 'necessitatibus';
    $request->atsCandidate->address->city = 'West Cobycester';
    $request->atsCandidate->address->country = 'Italy';
    $request->atsCandidate->address->countryCode = 'IQ';
    $request->atsCandidate->address->postalCode = '33074-7391';
    $request->atsCandidate->address->region = 'voluptatem';
    $request->atsCandidate->address->regionCode = 'exercitationem';
    $request->atsCandidate->companyName = 'necessitatibus';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2022-08-10');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'at';
    $request->atsCandidate->id = 'eab3fec9-578a-4645-8427-3a8418d16230';
    $request->atsCandidate->imageUrl = 'cupiditate';
    $request->atsCandidate->name = 'Dominic Abernathy';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'occaecati',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Miss';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-12-02');
    $request->connectionId = 'fuga';

    $requestSecurity = new PostAtsConnectionIdCandidateSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->postAtsConnectionIdCandidate($request, $requestSecurity);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest](../../models/operations/PostAtsConnectionIdCandidateRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateSecurity](../../models/operations/PostAtsConnectionIdCandidateSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
    $request->atsInterview->applicationId = 'accusamus';
    $request->atsInterview->candidateId = 'voluptatibus';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2021-10-13');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2022-01-06');
    $request->atsInterview->externalEventXref = 'praesentium';
    $request->atsInterview->id = 'c4d86e68-e4be-4056-813f-59da757a59ec';
    $request->atsInterview->jobId = 'hic';
    $request->atsInterview->location = 'necessitatibus';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2021-10-15');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2020-02-08');
    $request->atsInterview->userIds = [
        'quae',
    ];
    $request->connectionId = 'minus';

    $requestSecurity = new PostAtsConnectionIdInterviewSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->postAtsConnectionIdInterview($request, $requestSecurity);

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


## postAtsConnectionIdJob

Create a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2021-08-25');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2022-10-03');
    $request->atsJob->departments = [
        'atque',
    ];
    $request->atsJob->description = 'ipsum';
    $request->atsJob->employmentType = AtsJobEmploymentType::Seasonal;
    $request->atsJob->hiringManagerIds = [
        'magni',
    ];
    $request->atsJob->id = 'beb47737-3c8d-472f-a4d1-db1f2c431066';
    $request->atsJob->languageLocale = 'beatae';
    $request->atsJob->name = 'Marshall Kemmer';
    $request->atsJob->publicJobUrls = [
        'perspiciatis',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'earum',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Archived;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2020-01-28');
    $request->connectionId = 'iste';

    $requestSecurity = new PostAtsConnectionIdJobSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->postAtsConnectionIdJob($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest](../../models/operations/PostAtsConnectionIdJobRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobSecurity](../../models/operations/PostAtsConnectionIdJobSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'itaque';
    $request->atsScorecard->candidateId = 'alias';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d', '2022-01-26');
    $request->atsScorecard->id = '3a437000-ae6b-46bc-9b8f-759eac55a974';
    $request->atsScorecard->interviewId = 'veritatis';
    $request->atsScorecard->interviewerId = 'vero';
    $request->atsScorecard->jobId = 'consectetur';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-10-15');
    $request->connectionId = 'ad';

    $requestSecurity = new PostAtsConnectionIdScorecardSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->postAtsConnectionIdScorecard($request, $requestSecurity);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardRequest](../../models/operations/PostAtsConnectionIdScorecardRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdScorecardSecurity](../../models/operations/PostAtsConnectionIdScorecardSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d', '2022-05-22');
    $request->atsApplication->candidateId = 'ex';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d', '2022-04-03');
    $request->atsApplication->id = 'b8a72026-1143-45e1-b9db-c2259b1abda8';
    $request->atsApplication->jobId = 'placeat';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d', '2022-07-10');
    $request->atsApplication->rejectedReason = 'ipsa';
    $request->atsApplication->source = 'voluptates';
    $request->atsApplication->status = AtsApplicationStatus::New;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-26');
    $request->connectionId = 'dolore';
    $request->id = 'cb0672d1-ad87-49ee-b966-5b85efbd02ba';

    $requestSecurity = new PutAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->putAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest](../../models/operations/PutAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdSecurity](../../models/operations/PutAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'repudiandae';
    $request->atsCandidate->address->address2 = 'accusantium';
    $request->atsCandidate->address->city = 'Torpberg';
    $request->atsCandidate->address->country = 'Suriname';
    $request->atsCandidate->address->countryCode = 'KP';
    $request->atsCandidate->address->postalCode = '11369-2962';
    $request->atsCandidate->address->region = 'quidem';
    $request->atsCandidate->address->regionCode = 'quis';
    $request->atsCandidate->companyName = 'beatae';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2022-01-17');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'delectus';
    $request->atsCandidate->id = '92443da7-ce52-4b89-9c53-7c6454efb0b3';
    $request->atsCandidate->imageUrl = 'labore';
    $request->atsCandidate->name = 'Sergio Hirthe';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'minus',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Miss';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-05-01');
    $request->connectionId = 'impedit';
    $request->id = 'fbe2fd57-0757-4792-9177-deac646ecb57';

    $requestSecurity = new PutAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->putAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest](../../models/operations/PutAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdSecurity](../../models/operations/PutAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
    $request->atsInterview->applicationId = 'dolorem';
    $request->atsInterview->candidateId = 'modi';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-04');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d', '2022-06-01');
    $request->atsInterview->externalEventXref = 'repudiandae';
    $request->atsInterview->id = 'b1e5a2b1-2eb0-47f1-96db-99545fc95fa8';
    $request->atsInterview->jobId = 'totam';
    $request->atsInterview->location = 'molestias';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d', '2022-12-13');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-12');
    $request->atsInterview->userIds = [
        'iste',
    ];
    $request->connectionId = 'assumenda';
    $request->id = 'bb30fcb3-3ea0-455b-997c-d44e2f52d82d';

    $requestSecurity = new PutAtsConnectionIdInterviewIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->putAtsConnectionIdInterviewId($request, $requestSecurity);

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


## putAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2022-08-27');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2022-10-04');
    $request->atsJob->departments = [
        'facilis',
    ];
    $request->atsJob->description = 'tempore';
    $request->atsJob->employmentType = AtsJobEmploymentType::Intern;
    $request->atsJob->hiringManagerIds = [
        'voluptatibus',
    ];
    $request->atsJob->id = '48b656bc-db35-4ff2-a4b2-7537a8cd9e73';
    $request->atsJob->languageLocale = 'dicta';
    $request->atsJob->name = 'Sherman Brown';
    $request->atsJob->publicJobUrls = [
        'fugiat',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'ad',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Archived;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-13');
    $request->connectionId = 'iusto';
    $request->id = '7b114eeb-52ff-4785-bc37-814d4c98e0c2';

    $requestSecurity = new PutAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->putAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest](../../models/operations/PutAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdSecurity](../../models/operations/PutAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdScorecardIdRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'nam';
    $request->atsScorecard->candidateId = 'expedita';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d', '2021-10-26');
    $request->atsScorecard->id = 'eb75dad6-36c6-4005-83d8-bb31180f739a';
    $request->atsScorecard->interviewId = 'necessitatibus';
    $request->atsScorecard->interviewerId = 'provident';
    $request->atsScorecard->jobId = 'repudiandae';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-07-11');
    $request->connectionId = 'itaque';
    $request->id = 'b809e281-0331-4f39-81d4-c700b607f3c9';

    $requestSecurity = new PutAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->ats->putAtsConnectionIdScorecardId($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdRequest](../../models/operations/PutAtsConnectionIdScorecardIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdSecurity](../../models/operations/PutAtsConnectionIdScorecardIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdScorecardIdResponse](../../models/operations/PutAtsConnectionIdScorecardIdResponse.md)**

