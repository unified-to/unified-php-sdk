# Hris
(*hris*)

### Available Operations

* [deleteHrisConnectionIdEmployeeId](#deletehrisconnectionidemployeeid) - Remove a Employee
* [deleteHrisConnectionIdGroupId](#deletehrisconnectionidgroupid) - Remove a Group
* [getHrisConnectionIdEmployee](#gethrisconnectionidemployee) - List all Employees
* [getHrisConnectionIdEmployeeId](#gethrisconnectionidemployeeid) - Retrieve a Employee
* [getHrisConnectionIdGroup](#gethrisconnectionidgroup) - List all Groups
* [getHrisConnectionIdGroupId](#gethrisconnectionidgroupid) - Retrieve a Group
* [patchHrisConnectionIdEmployeeId](#patchhrisconnectionidemployeeid) - Update a Employee
* [patchHrisConnectionIdGroupId](#patchhrisconnectionidgroupid) - Update a Group
* [postHrisConnectionIdEmployee](#posthrisconnectionidemployee) - Create a Employee
* [postHrisConnectionIdGroup](#posthrisconnectionidgroup) - Create a Group
* [putHrisConnectionIdEmployeeId](#puthrisconnectionidemployeeid) - Update a Employee
* [putHrisConnectionIdGroupId](#puthrisconnectionidgroupid) - Update a Group

## deleteHrisConnectionIdEmployeeId

Remove a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteHrisConnectionIdEmployeeIdRequest();
    $request->connectionId = 'Laredo turquoise port';
    $request->id = '<ID>';

    $response = $sdk->hris->deleteHrisConnectionIdEmployeeId($request);

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
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest](../../models/operations/DeleteHrisConnectionIdEmployeeIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse](../../models/operations/DeleteHrisConnectionIdEmployeeIdResponse.md)**


## deleteHrisConnectionIdGroupId

Remove a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteHrisConnectionIdGroupIdRequest();
    $request->connectionId = 'consequently platforms Metal';
    $request->id = '<ID>';

    $response = $sdk->hris->deleteHrisConnectionIdGroupId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdRequest](../../models/operations/DeleteHrisConnectionIdGroupIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdGroupIdResponse](../../models/operations/DeleteHrisConnectionIdGroupIdResponse.md)**


## getHrisConnectionIdEmployee

List all Employees

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdEmployeeRequest();
    $request->connectionId = 'initiatives greedily project';
    $request->limit = 1798.52;
    $request->offset = 6683.19;
    $request->order = 'Sports';
    $request->query = 'TLS';
    $request->sort = 'Jazz Trans';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-09T17:32:06.988Z');

    $response = $sdk->hris->getHrisConnectionIdEmployee($request);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest](../../models/operations/GetHrisConnectionIdEmployeeRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeResponse](../../models/operations/GetHrisConnectionIdEmployeeResponse.md)**


## getHrisConnectionIdEmployeeId

Retrieve a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdEmployeeIdRequest();
    $request->connectionId = 'Keyboard cleverly Rubber';
    $request->id = '<ID>';

    $response = $sdk->hris->getHrisConnectionIdEmployeeId($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest](../../models/operations/GetHrisConnectionIdEmployeeIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse](../../models/operations/GetHrisConnectionIdEmployeeIdResponse.md)**


## getHrisConnectionIdGroup

List all Groups

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdGroupRequest();
    $request->connectionId = 'Loan';
    $request->limit = 3486.96;
    $request->offset = 9705.73;
    $request->order = 'Coordinator';
    $request->query = 'World';
    $request->sort = 'Dollar';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-15T16:06:13.340Z');

    $response = $sdk->hris->getHrisConnectionIdGroup($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupRequest](../../models/operations/GetHrisConnectionIdGroupRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdGroupIdRequest();
    $request->connectionId = 'behind';
    $request->id = '<ID>';

    $response = $sdk->hris->getHrisConnectionIdGroupId($request);

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
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdRequest](../../models/operations/GetHrisConnectionIdGroupIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdGroupIdResponse](../../models/operations/GetHrisConnectionIdGroupIdResponse.md)**


## patchHrisConnectionIdEmployeeId

Update a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest;
use \Unified\Unified_to\Models\Shared\HrisEmployee;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress;
use \Unified\Unified_to\Models\Shared\HrisEmail;
use \Unified\Unified_to\Models\Shared\HrisEmailType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentStatus;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeGender;
use \Unified\Unified_to\Models\Shared\HrisEmployeeMaritalStatus;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeRaw;
use \Unified\Unified_to\Models\Shared\HrisTelephone;
use \Unified\Unified_to\Models\Shared\HrisTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchHrisConnectionIdEmployeeIdRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'Tennessee virtual';
    $request->hrisEmployee->address->address2 = 'Assurance forecast';
    $request->hrisEmployee->address->city = 'Baton Rouge';
    $request->hrisEmployee->address->country = 'Bahamas';
    $request->hrisEmployee->address->countryCode = 'TW';
    $request->hrisEmployee->address->postalCode = '93632';
    $request->hrisEmployee->address->region = 'Bailey';
    $request->hrisEmployee->address->regionCode = 'navigating Oregon';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-31T08:11:49.561Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-08T23:14:10.860Z');
    $request->hrisEmployee->department = 'soupy web Robust';
    $request->hrisEmployee->division = 'Corporate loudly quantify';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'forenenst Operations male';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Consultant;
    $request->hrisEmployee->gender = HrisEmployeeGender::Trans;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-22T16:56:37.734Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'Gasoline Mission';
    $request->hrisEmployee->managerId = 'withdrawal wonderfully';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'minus Steel';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-04T21:20:47.766Z');
    $request->hrisEmployee->title = 'Country Cambridgeshire';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-31T01:26:30.284Z');
    $request->connectionId = 'card Credit';
    $request->id = '<ID>';

    $response = $sdk->hris->patchHrisConnectionIdEmployeeId($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest](../../models/operations/PatchHrisConnectionIdEmployeeIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse](../../models/operations/PatchHrisConnectionIdEmployeeIdResponse.md)**


## patchHrisConnectionIdGroupId

Update a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchHrisConnectionIdGroupIdRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-19T05:30:26.390Z');
    $request->hrisGroup->description = 'Stand-alone asymmetric orchestration';
    $request->hrisGroup->employeeIds = [
        'shootdown',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        '24/7',
    ];
    $request->hrisGroup->name = 'Agender trainer';
    $request->hrisGroup->parentId = 'Configuration Kids Sedan';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Division;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-18T16:48:12.885Z');
    $request->connectionId = 'Intersex';
    $request->id = '<ID>';

    $response = $sdk->hris->patchHrisConnectionIdGroupId($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdRequest](../../models/operations/PatchHrisConnectionIdGroupIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdGroupIdResponse](../../models/operations/PatchHrisConnectionIdGroupIdResponse.md)**


## postHrisConnectionIdEmployee

Create a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest;
use \Unified\Unified_to\Models\Shared\HrisEmployee;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress;
use \Unified\Unified_to\Models\Shared\HrisEmail;
use \Unified\Unified_to\Models\Shared\HrisEmailType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentStatus;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeGender;
use \Unified\Unified_to\Models\Shared\HrisEmployeeMaritalStatus;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeRaw;
use \Unified\Unified_to\Models\Shared\HrisTelephone;
use \Unified\Unified_to\Models\Shared\HrisTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostHrisConnectionIdEmployeeRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'Southeast ea withdrawal';
    $request->hrisEmployee->address->address2 = 'Developer';
    $request->hrisEmployee->address->city = 'Grand Forks';
    $request->hrisEmployee->address->country = 'Cayman Islands';
    $request->hrisEmployee->address->countryCode = 'BM';
    $request->hrisEmployee->address->postalCode = '63867-8134';
    $request->hrisEmployee->address->region = 'teal Northwest firewall';
    $request->hrisEmployee->address->regionCode = 'doubt Diesel COM';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-25T20:39:21.870Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-06T20:53:56.362Z');
    $request->hrisEmployee->department = 'payment mull';
    $request->hrisEmployee->division = 'Blues red';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'withdrawal Dora Northeast';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Freelance;
    $request->hrisEmployee->gender = HrisEmployeeGender::Intersex;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-27T15:08:56.352Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'red';
    $request->hrisEmployee->managerId = 'Southwest female';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'copy Washington arid';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-16T03:13:22.861Z');
    $request->hrisEmployee->title = 'Regional synthesize';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-15T02:35:02.446Z');
    $request->connectionId = 'past';

    $response = $sdk->hris->postHrisConnectionIdEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest](../../models/operations/PostHrisConnectionIdEmployeeRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse](../../models/operations/PostHrisConnectionIdEmployeeResponse.md)**


## postHrisConnectionIdGroup

Create a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostHrisConnectionIdGroupRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-23T15:35:38.483Z');
    $request->hrisGroup->description = 'Configurable stable product';
    $request->hrisGroup->employeeIds = [
        'Auto',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'JSON',
    ];
    $request->hrisGroup->name = 'whereas Usability transmitting';
    $request->hrisGroup->parentId = 'invoice Cyclocross Electric';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Group;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-30T12:40:50.129Z');
    $request->connectionId = 'Hybrid Schenectady';

    $response = $sdk->hris->postHrisConnectionIdGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupRequest](../../models/operations/PostHrisConnectionIdGroupRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdGroupResponse](../../models/operations/PostHrisConnectionIdGroupResponse.md)**


## putHrisConnectionIdEmployeeId

Update a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest;
use \Unified\Unified_to\Models\Shared\HrisEmployee;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress;
use \Unified\Unified_to\Models\Shared\HrisEmail;
use \Unified\Unified_to\Models\Shared\HrisEmailType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentStatus;
use \Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType;
use \Unified\Unified_to\Models\Shared\HrisEmployeeGender;
use \Unified\Unified_to\Models\Shared\HrisEmployeeMaritalStatus;
use \Unified\Unified_to\Models\Shared\PropertyHrisEmployeeRaw;
use \Unified\Unified_to\Models\Shared\HrisTelephone;
use \Unified\Unified_to\Models\Shared\HrisTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutHrisConnectionIdEmployeeIdRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'Northwest';
    $request->hrisEmployee->address->address2 = 'and';
    $request->hrisEmployee->address->city = 'Uniquefield';
    $request->hrisEmployee->address->country = 'Virgin Islands, British';
    $request->hrisEmployee->address->countryCode = 'AE';
    $request->hrisEmployee->address->postalCode = '41682';
    $request->hrisEmployee->address->region = 'Adventure Avon';
    $request->hrisEmployee->address->regionCode = 'bah South';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-18T13:59:47.040Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-19T17:38:57.783Z');
    $request->hrisEmployee->department = 'West auxiliary';
    $request->hrisEmployee->division = 'volt';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'saepe';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Casual;
    $request->hrisEmployee->gender = HrisEmployeeGender::Intersex;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-26T13:59:48.816Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'Cheese AI';
    $request->hrisEmployee->managerId = 'Metal Persevering';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Married;
    $request->hrisEmployee->name = 'Investment';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-29T01:47:18.208Z');
    $request->hrisEmployee->title = 'daintily';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-11T07:01:11.339Z');
    $request->connectionId = 'index';
    $request->id = '<ID>';

    $response = $sdk->hris->putHrisConnectionIdEmployeeId($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest](../../models/operations/PutHrisConnectionIdEmployeeIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse](../../models/operations/PutHrisConnectionIdEmployeeIdResponse.md)**


## putHrisConnectionIdGroupId

Update a Group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutHrisConnectionIdGroupIdRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-10T12:11:42.375Z');
    $request->hrisGroup->description = 'Decentralized methodical projection';
    $request->hrisGroup->employeeIds = [
        'Credit',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'South',
    ];
    $request->hrisGroup->name = 'Jeep brr Northwest';
    $request->hrisGroup->parentId = 'quickly Licensed';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-08T00:11:45.458Z');
    $request->connectionId = 'vortals interface Gasoline';
    $request->id = '<ID>';

    $response = $sdk->hris->putHrisConnectionIdGroupId($request);

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
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdRequest](../../models/operations/PutHrisConnectionIdGroupIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdGroupIdResponse](../../models/operations/PutHrisConnectionIdGroupIdResponse.md)**

