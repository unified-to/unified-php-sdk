# Hris


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'string';
    $request->hrisEmployee->address->address2 = 'string';
    $request->hrisEmployee->address->city = 'Armstrongborough';
    $request->hrisEmployee->address->country = 'Indonesia';
    $request->hrisEmployee->address->countryCode = 'MO';
    $request->hrisEmployee->address->postalCode = '23995';
    $request->hrisEmployee->address->region = 'string';
    $request->hrisEmployee->address->regionCode = 'string';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-07T16:11:17.542Z');
    $request->hrisEmployee->currency = 'Tunisian Dinar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-15T21:52:09.133Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::FullTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T04:47:23.458Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Married;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = [
        'Deckow' => 'string',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-06T17:06:15.004Z');
    $request->hrisEmployee->timezone = 'Australia/Melbourne';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-26T16:14:34.561Z');
    $request->connectionId = 'string';;

    $response = $sdk->hris->createHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**


## createHrisGroup

Create a group

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
        $request = new Operations\CreateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-12T02:07:27.193Z');
    $request->hrisGroup->description = 'Self-enabling system-worthy collaboration';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'South' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Department;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-28T15:45:30.103Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';;

    $response = $sdk->hris->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**


## getHrisEmployee

Retrieve an employee

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
        $request = new Operations\GetHrisEmployeeRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->hris->getHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**


## getHrisGroup

Retrieve a group

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
        $request = new Operations\GetHrisGroupRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->hris->getHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**


## listHrisEmployees

List all employees

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
        $request = new Operations\ListHrisEmployeesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 5148.12;
    $request->offset = 2185.43;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-10T00:54:40.984Z');;

    $response = $sdk->hris->listHrisEmployees($request);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**


## listHrisGroups

List all groups

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
        $request = new Operations\ListHrisGroupsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4815.14;
    $request->offset = 2554.75;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T00:40:26.357Z');;

    $response = $sdk->hris->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**


## patchHrisEmployee

Update an employee

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
        $request = new Operations\PatchHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'string';
    $request->hrisEmployee->address->address2 = 'string';
    $request->hrisEmployee->address->city = 'Zettaland';
    $request->hrisEmployee->address->country = 'Mexico';
    $request->hrisEmployee->address->countryCode = 'DJ';
    $request->hrisEmployee->address->postalCode = '87892';
    $request->hrisEmployee->address->region = 'string';
    $request->hrisEmployee->address->regionCode = 'string';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-12T22:40:07.218Z');
    $request->hrisEmployee->currency = 'Venezuelan bolívar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-04T03:46:56.564Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::Male;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T23:12:44.407Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = [
        'Nissan' => 'string',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-11T17:51:00.187Z');
    $request->hrisEmployee->timezone = 'Europe/Lisbon';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-01T15:09:08.937Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->patchHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**


## patchHrisGroup

Update a group

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
        $request = new Operations\PatchHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-10T03:17:00.454Z');
    $request->hrisGroup->description = 'Compatible contextually-based local area network';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'indexing' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-01T11:47:16.863Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**


## removeHrisEmployee

Remove an employee

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
        $request = new Operations\RemoveHrisEmployeeRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->removeHrisEmployee($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**


## removeHrisGroup

Remove a group

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
        $request = new Operations\RemoveHrisGroupRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->removeHrisGroup($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**


## updateHrisEmployee

Update an employee

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
        $request = new Operations\UpdateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'string';
    $request->hrisEmployee->address->address2 = 'string';
    $request->hrisEmployee->address->city = 'North Alfurt';
    $request->hrisEmployee->address->country = 'Thailand';
    $request->hrisEmployee->address->countryCode = 'ST';
    $request->hrisEmployee->address->postalCode = '60601-3179';
    $request->hrisEmployee->address->region = 'string';
    $request->hrisEmployee->address->regionCode = 'string';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-07T16:21:55.126Z');
    $request->hrisEmployee->currency = 'Zimbabwe Dollar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-03T23:33:19.708Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::Volunteer;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T07:53:27.713Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = [
        'Senior' => 'string',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-09T06:17:10.243Z');
    $request->hrisEmployee->timezone = 'Africa/Casablanca';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-13T20:08:58.858Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->updateHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**


## updateHrisGroup

Update a group

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
        $request = new Operations\UpdateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-07T01:08:49.621Z');
    $request->hrisGroup->description = 'Integrated empowering productivity';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'Southwest' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Team;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-09T14:54:15.549Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->hris->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

