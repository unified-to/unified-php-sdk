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
    $request->hrisEmployee->address->address1 = 'East Loan Gloves';
    $request->hrisEmployee->address->address2 = 'minus ack Recycled';
    $request->hrisEmployee->address->city = 'Fort Isobelboro';
    $request->hrisEmployee->address->country = 'Canada';
    $request->hrisEmployee->address->countryCode = 'VC';
    $request->hrisEmployee->address->postalCode = '43183';
    $request->hrisEmployee->address->region = 'Lead optimizing Kids';
    $request->hrisEmployee->address->regionCode = 'Representative magenta architectures';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-06T20:54:57.707Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-14T21:20:10.556Z');
    $request->hrisEmployee->department = 'Krone';
    $request->hrisEmployee->division = 'Agent index system';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'corrupti tremendously adapter';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-26T21:44:34.276Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'barley Kia';
    $request->hrisEmployee->managerId = 'West slather Reggae';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Married;
    $request->hrisEmployee->name = 'Guinea Modern';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-10T05:34:29.140Z');
    $request->hrisEmployee->title = 'West';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-31T04:08:29.290Z');
    $request->connectionId = 'Carolina';

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
    $request->connectionId = 'Automated';
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
    $request->connectionId = 'Table moratorium';
    $request->limit = 4462.02;
    $request->offset = 6942.29;
    $request->order = 'hew Lari Cedi';
    $request->query = 'pug';
    $request->sort = 'SUV';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-13T14:38:18.201Z');

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
    $request->hrisEmployee->address->address1 = 'catnap amet';
    $request->hrisEmployee->address->address2 = 'shameful';
    $request->hrisEmployee->address->city = 'West Palm Beach';
    $request->hrisEmployee->address->country = 'Eritrea';
    $request->hrisEmployee->address->countryCode = 'LB';
    $request->hrisEmployee->address->postalCode = '75104-7875';
    $request->hrisEmployee->address->region = 'qua';
    $request->hrisEmployee->address->regionCode = 'lime parse Representative';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-16T21:48:40.414Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-27T10:47:22.197Z');
    $request->hrisEmployee->department = 'Southeast Sleek';
    $request->hrisEmployee->division = 'reciprocal Soft';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'mole Latin Northwest';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Intern;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-10T07:19:19.148Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'intuitive monitor';
    $request->hrisEmployee->managerId = 'Steel South';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Oriental killer';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-20T14:01:14.505Z');
    $request->hrisEmployee->title = 'tonight Southwest';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T08:59:26.562Z');
    $request->connectionId = 'accidentally Research';
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
    $request->connectionId = 'Architect';
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
    $request->hrisEmployee->address->address1 = 'North';
    $request->hrisEmployee->address->address2 = 'truly Web';
    $request->hrisEmployee->address->city = 'New Adrienland';
    $request->hrisEmployee->address->country = 'Guatemala';
    $request->hrisEmployee->address->countryCode = 'CR';
    $request->hrisEmployee->address->postalCode = '98971-5886';
    $request->hrisEmployee->address->region = 'Borders Cotton';
    $request->hrisEmployee->address->regionCode = 'Buckinghamshire Jazz Tobago';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-26T14:07:32.579Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-02T20:23:31.622Z');
    $request->hrisEmployee->department = 'unleash whiteboard Northwest';
    $request->hrisEmployee->division = 'Oganesson Borders';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'Interactions Southeast';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = HrisEmployeeGender::Female;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-11T10:08:37.980Z');
    $request->hrisEmployee->id = '<ID>';
    $request->hrisEmployee->location = 'hack';
    $request->hrisEmployee->managerId = 'enhance';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'gee';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-01T13:37:28.604Z');
    $request->hrisEmployee->title = 'Home orange';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-29T09:32:48.600Z');
    $request->connectionId = 'Northwest holistic Solomon';
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

