# Employee

## Overview

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateHrisEmployeeRequest(
        connectionId: '<value>',
        hrisEmployee: new Shared\HrisEmployee(
            address: new Shared\PropertyHrisEmployeeAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Armstrongborough',
                country: 'Indonesia',
                countryCode: 'MO',
                postalCode: '23995',
                region: '<value>',
                regionCode: '<value>',
            ),
            bio: '<value>',
            companyId: '<value>',
            compensation: [
                new Shared\HrisCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2024-10-07T16:11:17.542Z'),
            currency: 'Tunisian Dinar',
            dateOfBirth: Utils\Utils::parseDateTime('2022-09-15T21:52:09.133Z'),
            department: '<value>',
            division: '<value>',
            emails: [
                new Shared\HrisEmail,
            ],
            employeeNumber: '<value>',
            employeeRoles: [
                Shared\PropertyHrisEmployeeEmployeeRoles::Recruiter,
            ],
            employmentStatus: Shared\EmploymentStatus::Active,
            employmentType: Shared\HrisEmployeeEmploymentType::Other,
            gender: Shared\HrisEmployeeGender::Intersex,
            groups: [
                new Shared\HrisGroup,
            ],
            hiredAt: Utils\Utils::parseDateTime('2022-10-30T17:54:25.597Z'),
            id: '<id>',
            imageUrl: '<value>',
            languageLocale: '<value>',
            location: '<value>',
            locations: [
                new Shared\HrisLocation,
            ],
            managerId: '<value>',
            maritalStatus: Shared\MaritalStatus::Married,
            name: '<value>',
            pronouns: '<value>',
            raw: [
                'colorlessness' => '<value>',
            ],
            salutation: '<value>',
            ssnSin: '<value>',
            telephones: [
                new Shared\HrisTelephone,
            ],
            terminatedAt: Utils\Utils::parseDateTime('2023-04-01T23:26:55.787Z'),
            timezone: 'Europe/Zagreb',
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-06-06T17:06:15.004Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->employee->createHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getHrisEmployee

Retrieve an employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetHrisEmployeeRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->employee->getHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listHrisEmployees

List all employees

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListHrisEmployeesRequest(
        connectionId: '<value>',
        companyId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5148.12,
        offset: 2185.43,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-04-10T00:54:40.984Z'),
    );
    $response = $sdk->employee->listHrisEmployees($request);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchHrisEmployee

Update an employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchHrisEmployeeRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisEmployee: new Shared\HrisEmployee(
            address: new Shared\PropertyHrisEmployeeAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Zettaland',
                country: 'Mexico',
                countryCode: 'DJ',
                postalCode: '87892',
                region: '<value>',
                regionCode: '<value>',
            ),
            bio: '<value>',
            companyId: '<value>',
            compensation: [
                new Shared\HrisCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2023-07-12T22:40:07.218Z'),
            currency: 'Venezuelan bolívar',
            dateOfBirth: Utils\Utils::parseDateTime('2024-05-04T03:46:56.564Z'),
            department: '<value>',
            division: '<value>',
            emails: [
                new Shared\HrisEmail,
            ],
            employeeNumber: '<value>',
            employeeRoles: [
                Shared\PropertyHrisEmployeeEmployeeRoles::Recruiter,
            ],
            employmentStatus: Shared\EmploymentStatus::Active,
            employmentType: Shared\HrisEmployeeEmploymentType::FullTime,
            gender: Shared\HrisEmployeeGender::Intersex,
            groups: [
                new Shared\HrisGroup,
            ],
            hiredAt: Utils\Utils::parseDateTime('2024-03-24T06:10:11.552Z'),
            id: '<id>',
            imageUrl: '<value>',
            languageLocale: '<value>',
            location: '<value>',
            locations: [
                new Shared\HrisLocation,
            ],
            managerId: '<value>',
            maritalStatus: Shared\MaritalStatus::Single,
            name: '<value>',
            pronouns: '<value>',
            raw: [
                'ohm' => '<value>',
            ],
            salutation: '<value>',
            ssnSin: '<value>',
            telephones: [
                new Shared\HrisTelephone,
            ],
            terminatedAt: Utils\Utils::parseDateTime('2022-10-18T06:05:07.523Z'),
            timezone: 'Pacific/Auckland',
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2024-03-19T18:41:09.098Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->employee->patchHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeHrisEmployee

Remove an employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveHrisEmployeeRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->employee->removeHrisEmployee($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateHrisEmployee

Update an employee

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateHrisEmployeeRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisEmployee: new Shared\HrisEmployee(
            address: new Shared\PropertyHrisEmployeeAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'North Alfurt',
                country: 'Thailand',
                countryCode: 'ST',
                postalCode: '60601-3179',
                region: '<value>',
                regionCode: '<value>',
            ),
            bio: '<value>',
            companyId: '<value>',
            compensation: [
                new Shared\HrisCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2024-06-07T16:21:55.126Z'),
            currency: 'Zimbabwe Dollar',
            dateOfBirth: Utils\Utils::parseDateTime('2024-05-03T23:33:19.708Z'),
            department: '<value>',
            division: '<value>',
            emails: [
                new Shared\HrisEmail,
            ],
            employeeNumber: '<value>',
            employeeRoles: [
                Shared\PropertyHrisEmployeeEmployeeRoles::Admin,
            ],
            employmentStatus: Shared\EmploymentStatus::Inactive,
            employmentType: Shared\HrisEmployeeEmploymentType::Freelance,
            gender: Shared\HrisEmployeeGender::NonBinary,
            groups: [
                new Shared\HrisGroup,
            ],
            hiredAt: Utils\Utils::parseDateTime('2024-01-07T07:57:10.914Z'),
            id: '<id>',
            imageUrl: '<value>',
            languageLocale: '<value>',
            location: '<value>',
            locations: [
                new Shared\HrisLocation,
            ],
            managerId: '<value>',
            maritalStatus: Shared\MaritalStatus::Single,
            name: '<value>',
            pronouns: '<value>',
            raw: [
                'Borders' => '<value>',
            ],
            salutation: '<value>',
            ssnSin: '<value>',
            telephones: [
                new Shared\HrisTelephone,
            ],
            terminatedAt: Utils\Utils::parseDateTime('2022-10-30T02:26:59.988Z'),
            timezone: 'Asia/Bangkok',
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-05-31T18:44:44.765Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->employee->updateHrisEmployee($request);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
