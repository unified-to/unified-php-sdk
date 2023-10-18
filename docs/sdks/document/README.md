# Document
(*document*)

### Available Operations

* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsScorecard](#getatsscorecard) - Retrieve a scorecard
* [listAtsScorecards](#listatsscorecards) - List all scorecards
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

## createAtsScorecard

Create a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'Brunei';
    $request->atsScorecard->candidateId = 'Account';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-10T05:38:00.981Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'mint';
    $request->atsScorecard->interviewerId = 'Southeast';
    $request->atsScorecard->jobId = 'Credit';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::No;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-05T00:10:36.512Z');
    $request->connectionId = 'hm';

    $response = $sdk->document->createAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest](../../models/operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse](../../models/operations/CreateAtsScorecardResponse.md)**


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsScorecardRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsScorecardRequest();
    $request->connectionId = 'Cordoba';
    $request->fields = [
        'Nissan',
    ];
    $request->id = '<ID>';

    $response = $sdk->document->getAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest](../../models/operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsScorecardResponse](../../models/operations/GetAtsScorecardResponse.md)**


## listAtsScorecards

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsScorecardsRequest();
    $request->applicationId = 'synthesizing';
    $request->candidateId = 'surprised';
    $request->connectionId = 'Gislason';
    $request->fields = [
        'Pickup',
    ];
    $request->interviewId = 'slop';
    $request->limit = 121;
    $request->offset = 355.08;
    $request->order = 'Grocery';
    $request->query = 'parallelism';
    $request->sort = 'Lutetium';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-02T03:46:32.779Z');

    $response = $sdk->document->listAtsScorecards($request);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest](../../models/operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse](../../models/operations/ListAtsScorecardsResponse.md)**


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'Falls';
    $request->atsScorecard->candidateId = 'engage';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-07T09:27:30.028Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'Malawi';
    $request->atsScorecard->interviewerId = 'watt';
    $request->atsScorecard->jobId = 'Interactions';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::DefinitelyNo;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-20T09:12:12.298Z');
    $request->connectionId = 'Malawi';
    $request->id = '<ID>';

    $response = $sdk->document->patchAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest](../../models/operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse](../../models/operations/PatchAtsScorecardResponse.md)**


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsScorecardRequest();
    $request->connectionId = 'approach';
    $request->id = '<ID>';

    $response = $sdk->document->removeAtsScorecard($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest](../../models/operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse](../../models/operations/RemoveAtsScorecardResponse.md)**


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'East';
    $request->atsScorecard->candidateId = 'Digitized';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-05T03:10:55.487Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'Copernicium';
    $request->atsScorecard->interviewerId = 'backing';
    $request->atsScorecard->jobId = 'Incredible';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::No;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-16T23:04:23.563Z');
    $request->connectionId = 'act';
    $request->id = '<ID>';

    $response = $sdk->document->updateAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest](../../models/operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse](../../models/operations/UpdateAtsScorecardResponse.md)**

