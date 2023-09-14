# group

### Available Operations

* [deleteHrisConnectionIdGroupId](#deletehrisconnectionidgroupid) - Remove a Group
* [getHrisConnectionIdGroup](#gethrisconnectionidgroup) - List all Groups
* [getHrisConnectionIdGroupId](#gethrisconnectionidgroupid) - Retrieve a Group
* [patchHrisConnectionIdGroupId](#patchhrisconnectionidgroupid) - Update a Group
* [postHrisConnectionIdGroup](#posthrisconnectionidgroup) - Create a Group
* [putHrisConnectionIdGroupId](#puthrisconnectionidgroupid) - Update a Group

## deleteHrisConnectionIdGroupId

Remove a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteHrisConnectionIdGroupIdRequest();
    $request->connectionId = 'doloremque';
    $request->id = '358a82c8-08fe-4275-9a20-47c0449e143f';

    $requestSecurity = new DeleteHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->deleteHrisConnectionIdGroupId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest](../../models/operations/DeleteHrisConnectionIdGroupIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdSecurity](../../models/operations/DeleteHrisConnectionIdGroupIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdResponse](../../models/operations/DeleteHrisConnectionIdGroupIdResponse.md)**


## getHrisConnectionIdGroup

List all Groups

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdGroupRequest();
    $request->connectionId = 'natus';
    $request->limit = 3881.71;
    $request->offset = 981.38;
    $request->order = 'excepturi';
    $request->query = 'distinctio';
    $request->sort = 'cum';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-02T18:21:43.719Z');

    $requestSecurity = new GetHrisConnectionIdGroupSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->getHrisConnectionIdGroup($request, $requestSecurity);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest](../../models/operations/GetHrisConnectionIdGroupRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupSecurity](../../models/operations/GetHrisConnectionIdGroupSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupResponse](../../models/operations/GetHrisConnectionIdGroupResponse.md)**


## getHrisConnectionIdGroupId

Retrieve a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdGroupIdRequest();
    $request->connectionId = 'incidunt';
    $request->id = '0d5a11fa-436e-4625-9233-f95c9d237397';

    $requestSecurity = new GetHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->getHrisConnectionIdGroupId($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest](../../models/operations/GetHrisConnectionIdGroupIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdSecurity](../../models/operations/GetHrisConnectionIdGroupIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdResponse](../../models/operations/GetHrisConnectionIdGroupIdResponse.md)**


## patchHrisConnectionIdGroupId

Update a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;
use \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchHrisConnectionIdGroupIdRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-24T20:49:56.592Z');
    $request->hrisGroup->description = 'quas';
    $request->hrisGroup->employeeIds = [
        'nemo',
    ];
    $request->hrisGroup->id = 'b5db4f50-0183-4feb-9f67-6b7206dab750';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'sit',
    ];
    $request->hrisGroup->name = 'Lois Padberg';
    $request->hrisGroup->parentId = 'dolore';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Division;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-07T11:36:40.272Z');
    $request->connectionId = 'minus';
    $request->id = '439ed8c4-320f-4412-80d4-487ac693b94c';

    $requestSecurity = new PatchHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->patchHrisConnectionIdGroupId($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest](../../models/operations/PatchHrisConnectionIdGroupIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdSecurity](../../models/operations/PatchHrisConnectionIdGroupIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdResponse](../../models/operations/PatchHrisConnectionIdGroupIdResponse.md)**


## postHrisConnectionIdGroup

Create a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;
use \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostHrisConnectionIdGroupRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-22T08:13:23.249Z');
    $request->hrisGroup->description = 'unde';
    $request->hrisGroup->employeeIds = [
        'fugiat',
    ];
    $request->hrisGroup->id = '2488d795-aa42-4fc4-8566-9f69a006d212';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'labore',
    ];
    $request->hrisGroup->name = 'Ms. Micheal Herman V';
    $request->hrisGroup->parentId = 'fugiat';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Division;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-10T03:30:41.953Z');
    $request->connectionId = 'cum';

    $requestSecurity = new PostHrisConnectionIdGroupSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->postHrisConnectionIdGroup($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest](../../models/operations/PostHrisConnectionIdGroupRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupSecurity](../../models/operations/PostHrisConnectionIdGroupSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupResponse](../../models/operations/PostHrisConnectionIdGroupResponse.md)**


## putHrisConnectionIdGroupId

Update a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;
use \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutHrisConnectionIdGroupIdRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-24T09:45:54.515Z');
    $request->hrisGroup->description = 'magnam';
    $request->hrisGroup->employeeIds = [
        'illo',
    ];
    $request->hrisGroup->id = '844060e0-0310-4d02-bdc9-01f5afd2a6c4';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'magnam',
    ];
    $request->hrisGroup->name = 'Jesus Kerluke';
    $request->hrisGroup->parentId = 'molestias';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Branch;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-03T07:45:54.681Z');
    $request->connectionId = 'eos';
    $request->id = '53c8962f-4896-4bf5-9e46-52d3c343d617';

    $requestSecurity = new PutHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->group->putHrisConnectionIdGroupId($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest](../../models/operations/PutHrisConnectionIdGroupIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdSecurity](../../models/operations/PutHrisConnectionIdGroupIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdResponse](../../models/operations/PutHrisConnectionIdGroupIdResponse.md)**

