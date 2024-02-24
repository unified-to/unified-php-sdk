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

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-24T10:18:34.661Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Inverse' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-16T16:10:16.235Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->createAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardSecurity](../../Models/Operations/CreateAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsScorecardRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->getAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsScorecardSecurity](../../Models/Operations/GetAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**


## listAtsScorecards

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsScorecardsRequest();
    $request->applicationId = '<value>';
    $request->candidateId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->interviewId = '<value>';
    $request->jobId = '<value>';
    $request->limit = 5126.98;
    $request->offset = 8077.44;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-19T14:46:22.333Z');;

    $requestSecurity = new Operations\ListAtsScorecardsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->listAtsScorecards($request, $requestSecurity);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsSecurity](../../Models/Operations/ListAtsScorecardsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-06T13:32:29.533Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'World' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-07T14:14:42.219Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->patchAtsScorecard($request, $requestSecurity);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardSecurity](../../Models/Operations/PatchAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsScorecardRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->removeAtsScorecard($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardSecurity](../../Models/Operations/RemoveAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T16:18:43.908Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Digitized' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-16T12:20:06.330Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->scorecard->updateAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardSecurity](../../Models/Operations/UpdateAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

