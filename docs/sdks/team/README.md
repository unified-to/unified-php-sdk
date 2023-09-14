# team

### Available Operations

* [deleteCrmConnectionIdTeamId](#deletecrmconnectionidteamid) - Remove a team
* [getCrmConnectionIdTeam](#getcrmconnectionidteam) - List all teams
* [getCrmConnectionIdTeamId](#getcrmconnectionidteamid) - Retrieve a team
* [patchCrmConnectionIdTeamId](#patchcrmconnectionidteamid) - Update a team
* [postCrmConnectionIdTeam](#postcrmconnectionidteam) - Create a team
* [putCrmConnectionIdTeamId](#putcrmconnectionidteamid) - Update a team

## deleteCrmConnectionIdTeamId

Remove a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'recusandae';
    $request->id = '9085075b-c253-4825-b343-fb0a4e66ea47';

    $requestSecurity = new DeleteCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->deleteCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest](../../models/operations/DeleteCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdSecurity](../../models/operations/DeleteCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse](../../models/operations/DeleteCrmConnectionIdTeamIdResponse.md)**


## getCrmConnectionIdTeam

List all teams

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdTeamRequest();
    $request->connectionId = 'exercitationem';
    $request->limit = 4739.38;
    $request->offset = 5096.38;
    $request->order = 'fugiat';
    $request->query = 'ab';
    $request->sort = 'voluptate';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-27T05:15:31.688Z');

    $requestSecurity = new GetCrmConnectionIdTeamSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->getCrmConnectionIdTeam($request, $requestSecurity);

    if ($response->crmTeams !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest](../../models/operations/GetCrmConnectionIdTeamRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamSecurity](../../models/operations/GetCrmConnectionIdTeamSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse](../../models/operations/GetCrmConnectionIdTeamResponse.md)**


## getCrmConnectionIdTeamId

Retrieve a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'qui';
    $request->id = '941818fc-679b-46b2-b253-59b855d015b6';

    $requestSecurity = new GetCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->getCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest](../../models/operations/GetCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdSecurity](../../models/operations/GetCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse](../../models/operations/GetCrmConnectionIdTeamIdResponse.md)**


## patchCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-30T21:43:39.349Z');
    $request->crmTeam->description = 'quos';
    $request->crmTeam->id = 'b83a38a8-a88c-4144-a00c-2caeb1ae1ecf';
    $request->crmTeam->name = 'Salvatore Fisher';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-02T04:30:22.741Z');
    $request->crmTeam->userIds = [
        'harum',
    ];
    $request->connectionId = 'quidem';
    $request->id = 'a7a05a8b-4a9e-4c5b-b688-cca363272760';

    $requestSecurity = new PatchCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->patchCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest](../../models/operations/PatchCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdSecurity](../../models/operations/PatchCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse](../../models/operations/PatchCrmConnectionIdTeamIdResponse.md)**


## postCrmConnectionIdTeam

Create a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-03T18:27:00.342Z');
    $request->crmTeam->description = 'vel';
    $request->crmTeam->id = '6e97e054-1033-447d-b8ff-2491145fab9e';
    $request->crmTeam->name = 'Erika Osinski';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-09T22:54:29.590Z');
    $request->crmTeam->userIds = [
        'amet',
    ];
    $request->connectionId = 'nisi';

    $requestSecurity = new PostCrmConnectionIdTeamSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->postCrmConnectionIdTeam($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest](../../models/operations/PostCrmConnectionIdTeamRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamSecurity](../../models/operations/PostCrmConnectionIdTeamSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse](../../models/operations/PostCrmConnectionIdTeamResponse.md)**


## putCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-06T05:57:36.477Z');
    $request->crmTeam->description = 'dolore';
    $request->crmTeam->id = 'eaa6bf2f-f14e-48c1-b352-accedacc5227';
    $request->crmTeam->name = 'Juan Funk';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-29T09:22:53.335Z');
    $request->crmTeam->userIds = [
        'architecto',
    ];
    $request->connectionId = 'vel';
    $request->id = 'bc41ea13-42d4-4104-a25e-f71de57a11d6';

    $requestSecurity = new PutCrmConnectionIdTeamIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->team->putCrmConnectionIdTeamId($request, $requestSecurity);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest](../../models/operations/PutCrmConnectionIdTeamIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdSecurity](../../models/operations/PutCrmConnectionIdTeamIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse](../../models/operations/PutCrmConnectionIdTeamIdResponse.md)**

