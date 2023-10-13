# Team
(*team*)

### Available Operations

* [createCrmTeam](#createcrmteam) - Create a team
* [getCrmTeam](#getcrmteam) - Retrieve a team
* [listCrmTeams](#listcrmteams) - List all teams
* [patchCrmTeam](#patchcrmteam) - Update a team
* [removeCrmTeam](#removecrmteam) - Remove a team
* [updateCrmTeam](#updatecrmteam) - Update a team

## createCrmTeam

Create a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-07T12:13:54.128Z');
    $request->crmTeam->description = 'Future-proofed uniform synergy';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'New';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-04T02:08:56.815Z');
    $request->crmTeam->userIds = [
        'Barbados',
    ];
    $request->connectionId = 'hacking Northwest tow';

    $response = $sdk->team->createCrmTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmTeamRequest](../../models/operations/CreateCrmTeamRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmTeamResponse](../../models/operations/CreateCrmTeamResponse.md)**


## getCrmTeam

Retrieve a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmTeamRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmTeamRequest();
    $request->connectionId = 'digital awful';
    $request->id = '<ID>';

    $response = $sdk->team->getCrmTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmTeamRequest](../../models/operations/GetCrmTeamRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmTeamResponse](../../models/operations/GetCrmTeamResponse.md)**


## listCrmTeams

List all teams

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmTeamsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmTeamsRequest();
    $request->connectionId = 'Classical microchip Wooden';
    $request->limit = 7301.3;
    $request->offset = 5943.38;
    $request->order = 'Direct';
    $request->query = 'Oriental brand';
    $request->sort = 'Principal Fluorine haptic';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-13T09:26:41.977Z');

    $response = $sdk->team->listCrmTeams($request);

    if ($response->crmTeams !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmTeamsRequest](../../models/operations/ListCrmTeamsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmTeamsResponse](../../models/operations/ListCrmTeamsResponse.md)**


## patchCrmTeam

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-23T00:19:43.657Z');
    $request->crmTeam->description = 'Synergized systematic moratorium';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'naive Mouse';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-15T09:19:14.187Z');
    $request->crmTeam->userIds = [
        'incentivize',
    ];
    $request->connectionId = 'Coordinator convergence';
    $request->id = '<ID>';

    $response = $sdk->team->patchCrmTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmTeamRequest](../../models/operations/PatchCrmTeamRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmTeamResponse](../../models/operations/PatchCrmTeamResponse.md)**


## removeCrmTeam

Remove a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmTeamRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmTeamRequest();
    $request->connectionId = 'Sol';
    $request->id = '<ID>';

    $response = $sdk->team->removeCrmTeam($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmTeamRequest](../../models/operations/RemoveCrmTeamRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmTeamResponse](../../models/operations/RemoveCrmTeamResponse.md)**


## updateCrmTeam

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-19T03:42:53.224Z');
    $request->crmTeam->description = 'Automated asymmetric benchmark';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'distinctio Avon female';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-11T11:17:00.428Z');
    $request->crmTeam->userIds = [
        'Electric',
    ];
    $request->connectionId = 'Northeast orchid';
    $request->id = '<ID>';

    $response = $sdk->team->updateCrmTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmTeamRequest](../../models/operations/UpdateCrmTeamRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmTeamResponse](../../models/operations/UpdateCrmTeamResponse.md)**

