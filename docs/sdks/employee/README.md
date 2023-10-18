# Employee
(*employee*)

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../models/operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../models/operations/CreateHrisEmployeeResponse.md)**


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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../models/operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../models/operations/GetHrisEmployeeResponse.md)**


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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../models/operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../models/operations/ListHrisEmployeesResponse.md)**


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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../models/operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../models/operations/PatchHrisEmployeeResponse.md)**


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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../models/operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../models/operations/RemoveHrisEmployeeResponse.md)**


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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../models/operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../models/operations/UpdateHrisEmployeeResponse.md)**

