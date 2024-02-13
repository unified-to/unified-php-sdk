# Scorecard


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-24T10:18:34.661Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Inverse' => 'string',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-16T16:10:16.235Z');
    $request->connectionId = 'string';;

    $response = $sdk->scorecard->createAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAtsScorecardRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->scorecard->getAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**


## listAtsScorecards

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAtsScorecardsRequest();
    $request->applicationId = 'string';
    $request->candidateId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->interviewId = 'string';
    $request->jobId = 'string';
    $request->limit = 5126.98;
    $request->offset = 8077.44;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-19T14:46:22.333Z');;

    $response = $sdk->scorecard->listAtsScorecards($request);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-06T13:32:29.533Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'World' => 'string',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-07T14:14:42.219Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->scorecard->patchAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAtsScorecardRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->scorecard->removeAtsScorecard($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T16:18:43.908Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Digitized' => 'string',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-16T12:20:06.330Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->scorecard->updateAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

