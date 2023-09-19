# Document

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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdScorecardIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdScorecardIdRequest();
    $request->connectionId = 'et';
    $request->id = '85ea4901-c7c4-43ad-adaa-784aba3d230e';

    $requestSecurity = new DeleteAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->deleteAtsConnectionIdScorecardId($request, $requestSecurity);

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
    $request->applicationId = 'nulla';
    $request->candidateId = 'tenetur';
    $request->connectionId = 'dignissimos';
    $request->interviewId = 'dolor';
    $request->limit = 5167.16;
    $request->offset = 1052.73;
    $request->order = 'vitae';
    $request->query = 'laborum';
    $request->sort = 'beatae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-01T04:03:25.906Z');

    $requestSecurity = new GetAtsConnectionIdScorecardSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->getAtsConnectionIdScorecard($request, $requestSecurity);

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
    $request->connectionId = 'non';
    $request->id = '82bd7ed5-6507-4621-858f-4d7396564c20';

    $requestSecurity = new GetAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->getAtsConnectionIdScorecardId($request, $requestSecurity);

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
    $request->atsScorecard->applicationId = 'fuga';
    $request->atsScorecard->candidateId = 'doloremque';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-19T06:02:49.943Z');
    $request->atsScorecard->id = '1a961d24-a7db-4b8f-932d-892cf7812cb5';
    $request->atsScorecard->interviewId = 'architecto';
    $request->atsScorecard->interviewerId = 'consequuntur';
    $request->atsScorecard->jobId = 'impedit';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-22T05:14:25.724Z');
    $request->connectionId = 'aspernatur';
    $request->id = '40bf548f-88f8-4f1b-b0bc-8e1f206d5d83';

    $requestSecurity = new PatchAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->patchAtsConnectionIdScorecardId($request, $requestSecurity);

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
    $request->atsScorecard->applicationId = 'illo';
    $request->atsScorecard->candidateId = 'temporibus';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-14T22:27:17.851Z');
    $request->atsScorecard->id = '81090f67-0667-43f3-a681-c5768dce7424';
    $request->atsScorecard->interviewId = 'accusantium';
    $request->atsScorecard->interviewerId = 'excepturi';
    $request->atsScorecard->jobId = 'deserunt';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-26T08:31:15.881Z');
    $request->connectionId = 'officiis';

    $requestSecurity = new PostAtsConnectionIdScorecardSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->postAtsConnectionIdScorecard($request, $requestSecurity);

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
    $request->atsScorecard->applicationId = 'eaque';
    $request->atsScorecard->candidateId = 'blanditiis';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-26T07:12:59.937Z');
    $request->atsScorecard->id = '1489a5f6-3e3a-4f3d-99dd-a33dcd63483e';
    $request->atsScorecard->interviewId = 'non';
    $request->atsScorecard->interviewerId = 'dolorum';
    $request->atsScorecard->jobId = 'esse';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-18T08:55:26.656Z');
    $request->connectionId = 'saepe';
    $request->id = '4df37e45-b895-45d4-93e1-3a482310907b';

    $requestSecurity = new PutAtsConnectionIdScorecardIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->document->putAtsConnectionIdScorecardId($request, $requestSecurity);

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

