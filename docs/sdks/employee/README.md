# employee

### Available Operations

* [deleteHrisConnectionIdEmployeeId](#deletehrisconnectionidemployeeid) - Remove a Employee
* [getHrisConnectionIdEmployee](#gethrisconnectionidemployee) - List all Employees
* [getHrisConnectionIdEmployeeId](#gethrisconnectionidemployeeid) - Retrieve a Employee
* [patchHrisConnectionIdEmployeeId](#patchhrisconnectionidemployeeid) - Update a Employee
* [postHrisConnectionIdEmployee](#posthrisconnectionidemployee) - Create a Employee
* [putHrisConnectionIdEmployeeId](#puthrisconnectionidemployeeid) - Update a Employee

## deleteHrisConnectionIdEmployeeId

Remove a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteHrisConnectionIdEmployeeIdRequest();
    $request->connectionId = 'facere';
    $request->id = '354c092b-d734-4f02-849d-86f4bb20fe5d';

    $requestSecurity = new DeleteHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->deleteHrisConnectionIdEmployeeId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest](../../models/operations/DeleteHrisConnectionIdEmployeeIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdSecurity](../../models/operations/DeleteHrisConnectionIdEmployeeIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdResponse](../../models/operations/DeleteHrisConnectionIdEmployeeIdResponse.md)**


## getHrisConnectionIdEmployee

List all Employees

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdEmployeeRequest();
    $request->connectionId = 'provident';
    $request->limit = 857.97;
    $request->offset = 1246.11;
    $request->order = 'quod';
    $request->query = 'expedita';
    $request->sort = 'sapiente';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-11T04:24:36.536Z');

    $requestSecurity = new GetHrisConnectionIdEmployeeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->getHrisConnectionIdEmployee($request, $requestSecurity);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeRequest](../../models/operations/GetHrisConnectionIdEmployeeRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeSecurity](../../models/operations/GetHrisConnectionIdEmployeeSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest;
use \Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetHrisConnectionIdEmployeeIdRequest();
    $request->connectionId = 'magnam';
    $request->id = '9caf45a2-7f69-4e2c-9e6d-10e9db3ad4c6';

    $requestSecurity = new GetHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->getHrisConnectionIdEmployeeId($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdRequest](../../models/operations/GetHrisConnectionIdEmployeeIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdSecurity](../../models/operations/GetHrisConnectionIdEmployeeIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisConnectionIdEmployeeIdResponse](../../models/operations/GetHrisConnectionIdEmployeeIdResponse.md)**


## patchHrisConnectionIdEmployeeId

Update a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
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
use \Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchHrisConnectionIdEmployeeIdRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'cum';
    $request->hrisEmployee->address->address2 = 'doloremque';
    $request->hrisEmployee->address->city = 'North Alia';
    $request->hrisEmployee->address->country = 'Mauritania';
    $request->hrisEmployee->address->countryCode = 'SM';
    $request->hrisEmployee->address->postalCode = '72142-4205';
    $request->hrisEmployee->address->region = 'odit';
    $request->hrisEmployee->address->regionCode = 'libero';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-11T12:16:56.379Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-16T11:08:23.366Z');
    $request->hrisEmployee->department = 'mollitia';
    $request->hrisEmployee->division = 'distinctio';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'dicta';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Freelance;
    $request->hrisEmployee->gender = HrisEmployeeGender::Female;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-08T14:22:55.798Z');
    $request->hrisEmployee->id = '1e9c3263-50a4-4671-8378-9ce0e991594d';
    $request->hrisEmployee->location = 'omnis';
    $request->hrisEmployee->managerId = 'amet';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Mr. Emma Ryan';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-17T14:13:12.964Z');
    $request->hrisEmployee->title = 'Dr.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-22T10:53:42.970Z');
    $request->connectionId = 'quaerat';
    $request->id = 'b4db8b77-8ebb-46e1-92cf-502bafb2cbc4';

    $requestSecurity = new PatchHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->patchHrisConnectionIdEmployeeId($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdRequest](../../models/operations/PatchHrisConnectionIdEmployeeIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdSecurity](../../models/operations/PatchHrisConnectionIdEmployeeIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisConnectionIdEmployeeIdResponse](../../models/operations/PatchHrisConnectionIdEmployeeIdResponse.md)**


## postHrisConnectionIdEmployee

Create a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
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
use \Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostHrisConnectionIdEmployeeRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'aliquid';
    $request->hrisEmployee->address->address2 = 'adipisci';
    $request->hrisEmployee->address->city = 'Port Emerson';
    $request->hrisEmployee->address->country = 'Tunisia';
    $request->hrisEmployee->address->countryCode = 'IR';
    $request->hrisEmployee->address->postalCode = '86015';
    $request->hrisEmployee->address->region = 'quisquam';
    $request->hrisEmployee->address->regionCode = 'dolor';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-12T20:25:25.525Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-30T12:42:25.087Z');
    $request->hrisEmployee->department = 'mollitia';
    $request->hrisEmployee->division = 'veritatis';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'vero';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::FullTime;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-23T19:36:22.207Z');
    $request->hrisEmployee->id = '966489d7-b786-473e-93a1-2a6b99249459';
    $request->hrisEmployee->location = 'numquam';
    $request->hrisEmployee->managerId = 'tempora';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Nettie Hartmann';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-09T06:46:19.392Z');
    $request->hrisEmployee->title = 'Ms.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-05T18:49:17.602Z');
    $request->connectionId = 'tempore';

    $requestSecurity = new PostHrisConnectionIdEmployeeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->postHrisConnectionIdEmployee($request, $requestSecurity);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeRequest](../../models/operations/PostHrisConnectionIdEmployeeRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeSecurity](../../models/operations/PostHrisConnectionIdEmployeeSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PostHrisConnectionIdEmployeeResponse](../../models/operations/PostHrisConnectionIdEmployeeResponse.md)**


## putHrisConnectionIdEmployeeId

Update a Employee

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
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
use \Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutHrisConnectionIdEmployeeIdRequest();
    $request->hrisEmployee = new HrisEmployee();
    $request->hrisEmployee->address = new PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = 'rem';
    $request->hrisEmployee->address->address2 = 'laboriosam';
    $request->hrisEmployee->address->city = 'Feestfield';
    $request->hrisEmployee->address->country = 'Sweden';
    $request->hrisEmployee->address->countryCode = 'VE';
    $request->hrisEmployee->address->postalCode = '21370';
    $request->hrisEmployee->address->region = 'incidunt';
    $request->hrisEmployee->address->regionCode = 'magnam';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-12T13:15:25.082Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-02T14:50:24.175Z');
    $request->hrisEmployee->department = 'delectus';
    $request->hrisEmployee->division = 'dicta';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'ratione';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Contractor;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-05T09:17:49.203Z');
    $request->hrisEmployee->id = 'be78bf60-6825-4894-aa76-3d5c72795b78';
    $request->hrisEmployee->location = 'exercitationem';
    $request->hrisEmployee->managerId = 'vitae';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Married;
    $request->hrisEmployee->name = 'Drew Kemmer';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-02T08:59:17.795Z');
    $request->hrisEmployee->title = 'Dr.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-30T08:43:57.932Z');
    $request->connectionId = 'consectetur';
    $request->id = '5b33bc0f-970c-442f-89f4-844225e75b79';

    $requestSecurity = new PutHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->employee->putHrisConnectionIdEmployeeId($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdRequest](../../models/operations/PutHrisConnectionIdEmployeeIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdSecurity](../../models/operations/PutHrisConnectionIdEmployeeIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutHrisConnectionIdEmployeeIdResponse](../../models/operations/PutHrisConnectionIdEmployeeIdResponse.md)**

