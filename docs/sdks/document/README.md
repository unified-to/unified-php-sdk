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
    $request->atsScorecard->comment = 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-03T14:50:39.962Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'violet';
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
    $request->jobId = 'North';
    $request->limit = 1893.11;
    $request->offset = 4281.16;
    $request->order = 'parallelism';
    $request->query = 'Lutetium';
    $request->sort = 'Tools';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-30T11:15:06.025Z');

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
    $request->atsScorecard->comment = 'New ABC 13 9370, 13.3, 5th Gen CoreA5-8250U, 8GB RAM, 256GB SSD, power UHD Graphics, OS 10 Home, OS Office A & J 2016';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-24T06:50:19.647Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'application';
    $request->atsScorecard->interviewerId = 'Leu';
    $request->atsScorecard->jobId = 'provided';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-01T17:55:20.334Z');
    $request->connectionId = 'up';
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
    $request->atsScorecard->comment = 'Carbonite web goalkeeper gloves are ergonomically designed to give easy fit';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-16T18:41:45.959Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'legislator';
    $request->atsScorecard->interviewerId = 'East';
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

