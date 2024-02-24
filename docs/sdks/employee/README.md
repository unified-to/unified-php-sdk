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

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'Armstrongborough';
    $request->hrisEmployee->address->country = 'Indonesia';
    $request->hrisEmployee->address->countryCode = 'MO';
    $request->hrisEmployee->address->postalCode = '23995';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-07T16:11:17.542Z');
    $request->hrisEmployee->currency = 'Tunisian Dinar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-15T21:52:09.133Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::FullTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T04:47:23.458Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Married;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Deckow' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-06T17:06:15.004Z');
    $request->hrisEmployee->timezone = 'Australia/Melbourne';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-26T16:14:34.561Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->createHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeSecurity](../../Models/Operations/CreateHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**


## getHrisEmployee

Retrieve an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetHrisEmployeeRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->getHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeSecurity](../../Models/Operations/GetHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**


## listHrisEmployees

List all employees

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListHrisEmployeesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5148.12;
    $request->offset = 2185.43;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-10T00:54:40.984Z');;

    $requestSecurity = new Operations\ListHrisEmployeesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->listHrisEmployees($request, $requestSecurity);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesSecurity](../../Models/Operations/ListHrisEmployeesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**


## patchHrisEmployee

Update an employee

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
        $request = new Operations\PatchHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'Zettaland';
    $request->hrisEmployee->address->country = 'Mexico';
    $request->hrisEmployee->address->countryCode = 'DJ';
    $request->hrisEmployee->address->postalCode = '87892';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-12T22:40:07.218Z');
    $request->hrisEmployee->currency = 'Venezuelan bolívar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-04T03:46:56.564Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::Male;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T23:12:44.407Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Nissan' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-11T17:51:00.187Z');
    $request->hrisEmployee->timezone = 'Europe/Lisbon';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-01T15:09:08.937Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->patchHrisEmployee($request, $requestSecurity);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeSecurity](../../Models/Operations/PatchHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**


## removeHrisEmployee

Remove an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveHrisEmployeeRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->removeHrisEmployee($request, $requestSecurity);

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeSecurity](../../Models/Operations/RemoveHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**


## updateHrisEmployee

Update an employee

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
        $request = new Operations\UpdateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'North Alfurt';
    $request->hrisEmployee->address->country = 'Thailand';
    $request->hrisEmployee->address->countryCode = 'ST';
    $request->hrisEmployee->address->postalCode = '60601-3179';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-07T16:21:55.126Z');
    $request->hrisEmployee->currency = 'Zimbabwe Dollar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-03T23:33:19.708Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::Volunteer;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T07:53:27.713Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Senior' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-09T06:17:10.243Z');
    $request->hrisEmployee->timezone = 'Africa/Casablanca';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-13T20:08:58.858Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->employee->updateHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeSecurity](../../Models/Operations/UpdateHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**

