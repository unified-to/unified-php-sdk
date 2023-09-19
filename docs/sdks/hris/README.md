# Hris

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
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteHrisConnectionIdEmployeeIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteHrisConnectionIdEmployeeIdRequest();
    $request->connectionId = 'dignissimos';
    $request->id = '8af49124-7725-4e62-9909-e91044a5de59';

    $requestSecurity = new DeleteHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->deleteHrisConnectionIdEmployeeId($request, $requestSecurity);

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
    $request->connectionId = 'mollitia';
    $request->id = 'c7706670-cf1c-4f59-b260-5251e66bb426';

    $requestSecurity = new DeleteHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->deleteHrisConnectionIdGroupId($request, $requestSecurity);

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
    $request->connectionId = 'deleniti';
    $request->limit = 5641.96;
    $request->offset = 4937.34;
    $request->order = 'facere';
    $request->query = 'provident';
    $request->sort = 'omnis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-18T19:09:00.927Z');

    $requestSecurity = new GetHrisConnectionIdEmployeeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->getHrisConnectionIdEmployee($request, $requestSecurity);

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
    $request->connectionId = 'nulla';
    $request->id = '335670e9-3ee6-4cf5-9f35-8aaeacae323a';

    $requestSecurity = new GetHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->getHrisConnectionIdEmployeeId($request, $requestSecurity);

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
    $request->connectionId = 'adipisci';
    $request->limit = 799.07;
    $request->offset = 7329.94;
    $request->order = 'maiores';
    $request->query = 'ducimus';
    $request->sort = 'rerum';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-16T21:57:10.772Z');

    $requestSecurity = new GetHrisConnectionIdGroupSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->getHrisConnectionIdGroup($request, $requestSecurity);

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
    $request->connectionId = 'quod';
    $request->id = 'c97716c8-02cc-49e0-87d9-d323f1aa63ed';

    $requestSecurity = new GetHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->getHrisConnectionIdGroupId($request, $requestSecurity);

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
    $request->hrisEmployee->address->address1 = 'occaecati';
    $request->hrisEmployee->address->address2 = 'optio';
    $request->hrisEmployee->address->city = 'Bolingbrook';
    $request->hrisEmployee->address->country = 'Saint Kitts and Nevis';
    $request->hrisEmployee->address->countryCode = 'MD';
    $request->hrisEmployee->address->postalCode = '47776';
    $request->hrisEmployee->address->region = 'quaerat';
    $request->hrisEmployee->address->regionCode = 'inventore';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-01-22T02:04:50.343Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-29T05:18:32.551Z');
    $request->hrisEmployee->department = 'nemo';
    $request->hrisEmployee->division = 'numquam';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'culpa';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Active;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Consultant;
    $request->hrisEmployee->gender = HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-24T05:44:39.520Z');
    $request->hrisEmployee->id = 'f116cdd5-444a-4756-a873-c7dd9efaf43d';
    $request->hrisEmployee->location = 'impedit';
    $request->hrisEmployee->managerId = 'autem';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Married;
    $request->hrisEmployee->name = 'Dr. Terri Collier';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-11T09:06:18.810Z');
    $request->hrisEmployee->title = 'Ms.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-24T14:46:51.528Z');
    $request->connectionId = 'doloremque';
    $request->id = 'df3db022-faa5-465f-b8f6-52ebb9d38383';

    $requestSecurity = new PatchHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->patchHrisConnectionIdEmployeeId($request, $requestSecurity);

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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-04T00:51:01.257Z');
    $request->hrisGroup->description = 'molestias';
    $request->hrisGroup->employeeIds = [
        'aperiam',
    ];
    $request->hrisGroup->id = '243b293d-ab30-4e91-bf50-fda04c8b1bb5';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'exercitationem',
    ];
    $request->hrisGroup->name = 'Martin Miller';
    $request->hrisGroup->parentId = 'aut';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-04T04:27:54.911Z');
    $request->connectionId = 'libero';
    $request->id = 'b744664e-b1d0-4338-8b0d-1bb17afee74b';

    $requestSecurity = new PatchHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->patchHrisConnectionIdGroupId($request, $requestSecurity);

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
    $request->hrisEmployee->address->address1 = 'voluptas';
    $request->hrisEmployee->address->address2 = 'delectus';
    $request->hrisEmployee->address->city = 'Pittsfield';
    $request->hrisEmployee->address->country = 'Moldova';
    $request->hrisEmployee->address->countryCode = 'FM';
    $request->hrisEmployee->address->postalCode = '48498';
    $request->hrisEmployee->address->region = 'laborum';
    $request->hrisEmployee->address->regionCode = 'reiciendis';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-29T11:34:03.754Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-08T18:29:01.032Z');
    $request->hrisEmployee->department = 'autem';
    $request->hrisEmployee->division = 'tenetur';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'rerum';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Consultant;
    $request->hrisEmployee->gender = HrisEmployeeGender::Female;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-07-10T16:46:34.467Z');
    $request->hrisEmployee->id = '162b303e-3023-4b93-a343-16cf55b43135';
    $request->hrisEmployee->location = 'ullam';
    $request->hrisEmployee->managerId = 'consectetur';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Single;
    $request->hrisEmployee->name = 'Amos Brown';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-21T08:14:58.422Z');
    $request->hrisEmployee->title = 'Dr.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-13T16:53:13.241Z');
    $request->connectionId = 'illum';

    $requestSecurity = new PostHrisConnectionIdEmployeeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->postHrisConnectionIdEmployee($request, $requestSecurity);

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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-08-17T13:03:55.540Z');
    $request->hrisGroup->description = 'sint';
    $request->hrisGroup->employeeIds = [
        'occaecati',
    ];
    $request->hrisGroup->id = '04c5195b-8648-4cef-a78f-1e2d3b901e09';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'corporis',
    ];
    $request->hrisGroup->name = 'Beulah Pouros';
    $request->hrisGroup->parentId = 'minus';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-03T06:53:33.818Z');
    $request->connectionId = 'iste';

    $requestSecurity = new PostHrisConnectionIdGroupSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->postHrisConnectionIdGroup($request, $requestSecurity);

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
    $request->hrisEmployee->address->address1 = 'voluptatibus';
    $request->hrisEmployee->address->address2 = 'odio';
    $request->hrisEmployee->address->city = 'East Sandystead';
    $request->hrisEmployee->address->country = 'Georgia';
    $request->hrisEmployee->address->countryCode = 'MZ';
    $request->hrisEmployee->address->postalCode = '13570';
    $request->hrisEmployee->address->region = 'nesciunt';
    $request->hrisEmployee->address->regionCode = 'corrupti';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-03T23:52:13.068Z');
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-18T13:26:27.939Z');
    $request->hrisEmployee->department = 'eveniet';
    $request->hrisEmployee->division = 'vitae';
    $request->hrisEmployee->emails = [
        new HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = 'quos';
    $request->hrisEmployee->employmentStatus = HrisEmployeeEmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = HrisEmployeeEmploymentType::Casual;
    $request->hrisEmployee->gender = HrisEmployeeGender::Intersex;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-02T01:49:42.567Z');
    $request->hrisEmployee->id = '5118c2cc-57fb-4d60-b1a7-8ed29a9d4eea';
    $request->hrisEmployee->location = 'totam';
    $request->hrisEmployee->managerId = 'ullam';
    $request->hrisEmployee->maritalStatus = HrisEmployeeMaritalStatus::Married;
    $request->hrisEmployee->name = 'Penny Ruecker';
    $request->hrisEmployee->raw = new PropertyHrisEmployeeRaw();
    $request->hrisEmployee->telephones = [
        new HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-14T22:01:27.378Z');
    $request->hrisEmployee->title = 'Mrs.';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-15T21:37:38.524Z');
    $request->connectionId = 'quas';
    $request->id = 'be4f278f-d966-47e4-ac51-d2ffaa58dcef';

    $requestSecurity = new PutHrisConnectionIdEmployeeIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->putHrisConnectionIdEmployeeId($request, $requestSecurity);

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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-23T07:56:27.936Z');
    $request->hrisGroup->description = 'quaerat';
    $request->hrisGroup->employeeIds = [
        'minus',
    ];
    $request->hrisGroup->id = '955b9bdf-2190-4abd-9bbc-c2725ec2659c';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'debitis',
    ];
    $request->hrisGroup->name = 'Ms. Marilyn Leannon';
    $request->hrisGroup->parentId = 'alias';
    $request->hrisGroup->raw = new PropertyHrisGroupRaw();
    $request->hrisGroup->type = HrisGroupType::Branch;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-08T02:36:26.289Z');
    $request->connectionId = 'eveniet';
    $request->id = 'f68e45c8-addf-4ac7-9450-0430c6632b43';

    $requestSecurity = new PutHrisConnectionIdGroupIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->hris->putHrisConnectionIdGroupId($request, $requestSecurity);

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

