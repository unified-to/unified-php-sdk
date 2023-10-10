# Document
(*document*)

### Available Operations

* [deleteAtsConnectionIdScorecardId](#deleteatsconnectionidscorecardid) - Remove a scorecard
* [getAtsConnectionIdScorecard](#getatsconnectionidscorecard) - List all scorecards
* [getAtsConnectionIdScorecardId](#getatsconnectionidscorecardid) - Retrieve a scorecard
* [patchAtsConnectionIdScorecardId](#patchatsconnectionidscorecardid) - Update a scorecard
* [postAtsConnectionIdScorecard](#postatsconnectionidscorecard) - Create a scorecard
* [putAtsConnectionIdScorecardId](#putatsconnectionidscorecardid) - Update a scorecard

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'Agent intrepid';
    $request->id = '<ID>';

    $response = $sdk->document->deleteAtsConnectionIdScorecardId($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->document->getAtsConnectionIdScorecard($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'East mobile Mini';
    $request->id = '<ID>';

    $response = $sdk->document->getAtsConnectionIdScorecardId($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->document->patchAtsConnectionIdScorecardId($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->document->postAtsConnectionIdScorecard($request);

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

    $response = $sdk->document->putAtsConnectionIdScorecardId($request);

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

