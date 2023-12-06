# Employee


### Available Operations

* [createHrisEmployee](#createhrisemployee) - Create an employee
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [listHrisEmployees](#listhrisemployees) - List all employees
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [updateHrisEmployee](#updatehrisemployee) - Update an employee

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
$security->jwt = '';

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
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-07T18:03:23.931Z');
    $request->hrisEmployee->currency = 'Tunisian Dinar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-15T16:13:17.445Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::FullTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-07T18:00:42.323Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Married;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = new Shared\PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-17T20:25:22.475Z');
    $request->hrisEmployee->timezone = 'Pacific/Fiji';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-19T11:29:09.519Z');
    $request->connectionId = 'string';;

    $response = $sdk->employee->createHrisEmployee($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetHrisEmployeeRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->employee->getHrisEmployee($request);

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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**


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
$security->jwt = '';

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-09T14:44:59.888Z');;

    $response = $sdk->employee->listHrisEmployees($request);

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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**


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
$security->jwt = '';

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
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-12T10:27:03.270Z');
    $request->hrisEmployee->currency = 'Venezuelan bolívar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-04T09:04:41.512Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::Male;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-20T12:09:16.775Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = new Shared\PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-01T19:39:19.867Z');
    $request->hrisEmployee->timezone = 'Asia/Krasnoyarsk';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-11T04:58:47.103Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->employee->patchHrisEmployee($request);

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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveHrisEmployeeRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->employee->removeHrisEmployee($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**


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
$security->jwt = '';

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
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-07T20:54:18.451Z');
    $request->hrisEmployee->currency = 'Zimbabwe Dollar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-04T04:51:18.540Z');
    $request->hrisEmployee->department = 'string';
    $request->hrisEmployee->division = 'string';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'string';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::Volunteer;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-20T10:49:05.298Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->imageUrl = 'string';
    $request->hrisEmployee->languageLocale = 'string';
    $request->hrisEmployee->location = 'string';
    $request->hrisEmployee->managerId = 'string';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = 'string';
    $request->hrisEmployee->raw = new Shared\PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-21T01:25:42.937Z');
    $request->hrisEmployee->timezone = 'America/Phoenix';
    $request->hrisEmployee->title = 'string';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-08T15:27:20.252Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->employee->updateHrisEmployee($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**

