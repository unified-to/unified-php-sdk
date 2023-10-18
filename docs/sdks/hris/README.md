# Hris
(*hris*)

### Available Operations

* [createHrisEmployee](#createhrisemployee) - Create an employee
* [createHrisGroup](#createhrisgroup) - Create a group
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [listHrisEmployees](#listhrisemployees) - List all employees
* [listHrisGroups](#listhrisgroups) - List all groups
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [updateHrisEmployee](#updatehrisemployee) - Update an employee
* [updateHrisGroup](#updatehrisgroup) - Update a group

## createHrisEmployee

Create an employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest;
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateHrisEmployeeRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'meter';
    $request->hrisEmployee->address->address2 = 'technologies';
    $request->hrisEmployee->address->city = 'Frederickberg';
    $request->hrisEmployee->address->country = 'French Polynesia';
    $request->hrisEmployee->address->countryCode = 'VN';
    $request->hrisEmployee->address->postalCode = '59724-0942';
    $request->hrisEmployee->address->region = 'Deckow';
    $request->hrisEmployee->address->regionCode = 'Spur';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-23T22:14:37.407Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-17T06:57:07.657Z');
    $request->hrisEmployee->department = 'candela';
    $request->hrisEmployee->division = 'Data';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'Representative';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Casual;
    $request->hrisEmployee->gender = HrisEmployeeGender::Female;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-18T03:26:10.390Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'East';
    $request->hrisEmployee->managerId = 'City';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Gasoline';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-24T00:02:16.169Z');
    $request->hrisEmployee->title = 'index';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-13T11:07:08.778Z');
    $request->connectionId = 'yowza';

    $response = $sdk->hris->createHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../models/operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../models/operations/CreateHrisEmployeeResponse.md)**


## createHrisGroup

Create a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateHrisGroupRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateHrisGroupRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-11T13:14:46.931Z');
    $request->hrisGroup->description = 'Self-enabling system-worthy collaboration';
    $request->hrisGroup->employeeIds = [
        'South',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'Proactive',
    ];
    $request->hrisGroup->name = 'markets';
    $request->hrisGroup->parentId = 'Forks';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Division;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-03T19:27:00.862Z');
    $request->connectionId = 'navigating';

    $response = $sdk->hris->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateHrisGroupRequest](../../models/operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisGroupResponse](../../models/operations/CreateHrisGroupResponse.md)**


## getHrisEmployee

Retrieve an employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetHrisEmployeeRequest();
    $request->connectionId = 'Louisiana';
    $request->fields = [
        'Afghanistan',
    ];
    $request->id = '<ID>';

    $response = $sdk->hris->getHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../models/operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../models/operations/GetHrisEmployeeResponse.md)**


## getHrisGroup

Retrieve a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetHrisGroupRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetHrisGroupRequest();
    $request->connectionId = 'likewise';
    $request->fields = [
        'while',
    ];
    $request->id = '<ID>';

    $response = $sdk->hris->getHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetHrisGroupRequest](../../models/operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisGroupResponse](../../models/operations/GetHrisGroupResponse.md)**


## listHrisEmployees

List all employees

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListHrisEmployeesRequest();
    $request->connectionId = 'overriding';
    $request->fields = [
        'Krona',
    ];
    $request->limit = 4462.02;
    $request->offset = 6942.29;
    $request->order = 'yoyo';
    $request->query = 'Investment';
    $request->sort = 'Cedi';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-31T23:20:51.612Z');

    $response = $sdk->hris->listHrisEmployees($request);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../models/operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../models/operations/ListHrisEmployeesResponse.md)**


## listHrisGroups

List all groups

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListHrisGroupsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListHrisGroupsRequest();
    $request->connectionId = 'Northwest';
    $request->fields = [
        'however',
    ];
    $request->limit = 8700.83;
    $request->offset = 6401.41;
    $request->order = 'Tools';
    $request->query = 'feel';
    $request->sort = 'olive';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-04T23:24:05.802Z');

    $response = $sdk->hris->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest](../../models/operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisGroupsResponse](../../models/operations/ListHrisGroupsResponse.md)**


## patchHrisEmployee

Update an employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest;
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchHrisEmployeeRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'invoice';
    $request->hrisEmployee->address->address2 = 'New';
    $request->hrisEmployee->address->city = 'Port Naomiefield';
    $request->hrisEmployee->address->country = 'Vietnam';
    $request->hrisEmployee->address->countryCode = 'EH';
    $request->hrisEmployee->address->postalCode = '87510-4787';
    $request->hrisEmployee->address->region = 'port';
    $request->hrisEmployee->address->regionCode = 'qua';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-01T15:09:40.907Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-06T23:32:48.401Z');
    $request->hrisEmployee->department = 'Terbium';
    $request->hrisEmployee->division = 'pace';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'witch';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Casual;
    $request->hrisEmployee->gender = HrisEmployeeGender::Male;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-31T22:13:50.024Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'Sleek';
    $request->hrisEmployee->managerId = 'navigate';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Soft';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-22T21:09:49.659Z');
    $request->hrisEmployee->title = 'mole';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-11T00:26:48.645Z');
    $request->connectionId = 'Executive';
    $request->id = '<ID>';

    $response = $sdk->hris->patchHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../models/operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../models/operations/PatchHrisEmployeeResponse.md)**


## patchHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchHrisGroupRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchHrisGroupRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-09T20:25:35.217Z');
    $request->hrisGroup->description = 'Compatible contextually-based local area network';
    $request->hrisGroup->employeeIds = [
        'indexing',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'Mobility',
    ];
    $request->hrisGroup->name = 'UTF8';
    $request->hrisGroup->parentId = 'Music';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Department;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-28T23:19:24.671Z');
    $request->connectionId = 'Mountain';
    $request->id = '<ID>';

    $response = $sdk->hris->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchHrisGroupRequest](../../models/operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisGroupResponse](../../models/operations/PatchHrisGroupResponse.md)**


## removeHrisEmployee

Remove an employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveHrisEmployeeRequest();
    $request->connectionId = 'Chicken';
    $request->id = '<ID>';

    $response = $sdk->hris->removeHrisEmployee($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../models/operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../models/operations/RemoveHrisEmployeeResponse.md)**


## removeHrisGroup

Remove a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveHrisGroupRequest();
    $request->connectionId = 'glistening';
    $request->id = '<ID>';

    $response = $sdk->hris->removeHrisGroup($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest](../../models/operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse](../../models/operations/RemoveHrisGroupResponse.md)**


## updateHrisEmployee

Update an employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest;
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateHrisEmployeeRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'Alabama';
    $request->hrisEmployee->address->address2 = 'Normal';
    $request->hrisEmployee->address->city = 'South Hill';
    $request->hrisEmployee->address->country = 'Netherlands';
    $request->hrisEmployee->address->countryCode = 'MY';
    $request->hrisEmployee->address->postalCode = '60131';
    $request->hrisEmployee->address->region = 'silver';
    $request->hrisEmployee->address->regionCode = 'Hybrid';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-04T04:51:18.540Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-28T06:52:57.241Z');
    $request->hrisEmployee->department = 'Screen';
    $request->hrisEmployee->division = 'Investor';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'Barium';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Casual;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-08T07:31:04.963Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'plum';
    $request->hrisEmployee->managerId = 'Won';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'anti';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-27T09:46:28.961Z');
    $request->hrisEmployee->title = 'unleash';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-12T18:00:52.745Z');
    $request->connectionId = 'Designer';
    $request->id = '<ID>';

    $response = $sdk->hris->updateHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../models/operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../models/operations/UpdateHrisEmployeeResponse.md)**


## updateHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest;
use \Unified\Unified_to\Models\Shared\HrisGroup;
use \Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw;
use \Unified\Unified_to\Models\Shared\HrisGroupType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateHrisGroupRequest();
    $request->hrisGroup = new HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-06T17:42:02.933Z');
    $request->hrisGroup->description = 'Integrated empowering productivity';
    $request->hrisGroup->employeeIds = [
        'Southwest',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'Bahamas',
    ];
    $request->hrisGroup->name = 'Berkshire';
    $request->hrisGroup->parentId = 'Southeast';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Group;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-03T19:36:14.469Z');
    $request->connectionId = 'Charlottesville';
    $request->id = '<ID>';

    $response = $sdk->hris->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest](../../models/operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse](../../models/operations/UpdateHrisGroupResponse.md)**

