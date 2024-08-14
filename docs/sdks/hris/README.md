# Hris


### Available Operations

* [createHrisCompany](#createhriscompany) - Create a company
* [createHrisEmployee](#createhrisemployee) - Create an employee
* [createHrisGroup](#createhrisgroup) - Create a group
* [createHrisLocation](#createhrislocation) - Create a location
* [getHrisCompany](#gethriscompany) - Retrieve a company
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [getHrisLocation](#gethrislocation) - Retrieve a location
* [getHrisPayslip](#gethrispayslip) - Retrieve a payslip
* [getHrisTimeoff](#gethristimeoff) - Retrieve a timeoff
* [listHrisCompanies](#listhriscompanies) - List all companies
* [listHrisEmployees](#listhrisemployees) - List all employees
* [listHrisGroups](#listhrisgroups) - List all groups
* [listHrisLocations](#listhrislocations) - List all locations
* [listHrisPayslips](#listhrispayslips) - List all payslips
* [listHrisTimeoffs](#listhristimeoffs) - List all timeoffs
* [patchHrisCompany](#patchhriscompany) - Update a company
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [patchHrisLocation](#patchhrislocation) - Update a location
* [removeHrisCompany](#removehriscompany) - Remove a company
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [removeHrisLocation](#removehrislocation) - Remove a location
* [updateHrisCompany](#updatehriscompany) - Update a company
* [updateHrisEmployee](#updatehrisemployee) - Update an employee
* [updateHrisGroup](#updatehrisgroup) - Update a group
* [updateHrisLocation](#updatehrislocation) - Update a location

## createHrisCompany

Create a company

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
    $request = new Operations\CreateHrisCompanyRequest(
        connectionId: '<value>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Leuschketon',
                country: 'Greenland',
                countryCode: 'UG',
                postalCode: '28999',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-11-26T14:41:42.849Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Account' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-12-14T07:52:45.369Z'),
        ),
    );
    $response = $sdk->hris->createHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisCompanyRequest](../../Models/Operations/CreateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\CreateHrisCompanyResponse](../../Models/Operations/CreateHrisCompanyResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

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
    );
    $response = $sdk->hris->createHrisEmployee($request);

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

## createHrisGroup

Create a group

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
    $request = new Operations\CreateHrisGroupRequest(
        connectionId: '<value>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-08-12T02:07:27.193Z'),
            description: 'Self-enabling system-worthy collaboration',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'South' => '<value>',
            ],
            type: Shared\HrisGroupType::Department,
            updatedAt: Utils\Utils::parseDateTime('2023-11-28T15:45:30.103Z'),
            userIds: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->hris->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## createHrisLocation

Create a location

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
    $request = new Operations\CreateHrisLocationRequest(
        connectionId: '<value>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Port Trinityshire',
                country: 'Saint Pierre and Miquelon',
                countryCode: 'GE',
                postalCode: '72153',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-11-01T01:29:28.442Z'),
            currency: 'CFA Franc BCEAO',
            description: 'Persistent eco-centric pricing structure',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'male' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'America/Argentina/Buenos_Aires',
            updatedAt: Utils\Utils::parseDateTime('2023-07-17T19:29:27.962Z'),
        ),
    );
    $response = $sdk->hris->createHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisLocationRequest](../../Models/Operations/CreateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\CreateHrisLocationResponse](../../Models/Operations/CreateHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getHrisCompany

Retrieve a company

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
    $request = new Operations\GetHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->hris->getHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisCompanyRequest](../../Models/Operations/GetHrisCompanyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetHrisCompanyResponse](../../Models/Operations/GetHrisCompanyResponse.md)**
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
    $response = $sdk->hris->getHrisEmployee($request);

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

## getHrisGroup

Retrieve a group

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
    $request = new Operations\GetHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->hris->getHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |


### Response

**[?Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getHrisLocation

Retrieve a location

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
    $request = new Operations\GetHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->hris->getHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisLocationRequest](../../Models/Operations/GetHrisLocationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\GetHrisLocationResponse](../../Models/Operations/GetHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getHrisPayslip

Retrieve a payslip

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
    $request = new Operations\GetHrisPayslipRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->hris->getHrisPayslip($request);

    if ($response->hrisPayslip !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPayslipRequest](../../Models/Operations/GetHrisPayslipRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetHrisPayslipResponse](../../Models/Operations/GetHrisPayslipResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getHrisTimeoff

Retrieve a timeoff

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
    $request = new Operations\GetHrisTimeoffRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->hris->getHrisTimeoff($request);

    if ($response->hrisTimeoff !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisTimeoffRequest](../../Models/Operations/GetHrisTimeoffRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetHrisTimeoffResponse](../../Models/Operations/GetHrisTimeoffResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listHrisCompanies

List all companies

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
    $request = new Operations\ListHrisCompaniesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9887.05,
        offset: 4708.81,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-12-23T09:20:33.437Z'),
    );
    $response = $sdk->hris->listHrisCompanies($request);

    if ($response->hrisCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisCompaniesRequest](../../Models/Operations/ListHrisCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ListHrisCompaniesResponse](../../Models/Operations/ListHrisCompaniesResponse.md)**
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
    $response = $sdk->hris->listHrisEmployees($request);

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

## listHrisGroups

List all groups

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
    $request = new Operations\ListHrisGroupsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 4815.14,
        offset: 2554.75,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-04-30T00:40:26.357Z'),
    );
    $response = $sdk->hris->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listHrisLocations

List all locations

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
    $request = new Operations\ListHrisLocationsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5896.74,
        offset: 7281.87,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-05-12T05:34:35.160Z'),
    );
    $response = $sdk->hris->listHrisLocations($request);

    if ($response->hrisLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisLocationsRequest](../../Models/Operations/ListHrisLocationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ListHrisLocationsResponse](../../Models/Operations/ListHrisLocationsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listHrisPayslips

List all payslips

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
    $request = new Operations\ListHrisPayslipsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 254.98,
        offset: 7922.79,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-04-05T03:49:22.310Z'),
        userId: '<value>',
    );
    $response = $sdk->hris->listHrisPayslips($request);

    if ($response->hrisPayslips !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPayslipsRequest](../../Models/Operations/ListHrisPayslipsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\ListHrisPayslipsResponse](../../Models/Operations/ListHrisPayslipsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listHrisTimeoffs

List all timeoffs

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
    $request = new Operations\ListHrisTimeoffsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 1802.06,
        offset: 8928.71,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-11-20T05:14:17.047Z'),
        userId: '<value>',
    );
    $response = $sdk->hris->listHrisTimeoffs($request);

    if ($response->hrisTimeoffs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisTimeoffsRequest](../../Models/Operations/ListHrisTimeoffsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\ListHrisTimeoffsResponse](../../Models/Operations/ListHrisTimeoffsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchHrisCompany

Update a company

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
    $request = new Operations\PatchHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'West Tressashire',
                country: 'Norfolk Island',
                countryCode: 'MW',
                postalCode: '36009-7244',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-12-23T19:08:18.404Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Chief' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-08-30T10:26:34.618Z'),
        ),
    );
    $response = $sdk->hris->patchHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisCompanyRequest](../../Models/Operations/PatchHrisCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\PatchHrisCompanyResponse](../../Models/Operations/PatchHrisCompanyResponse.md)**
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
    );
    $response = $sdk->hris->patchHrisEmployee($request);

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

## patchHrisGroup

Update a group

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
    $request = new Operations\PatchHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-11-10T03:17:00.454Z'),
            description: 'Compatible contextually-based local area network',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'indexing' => '<value>',
            ],
            type: Shared\HrisGroupType::BusinessUnit,
            updatedAt: Utils\Utils::parseDateTime('2022-01-01T11:47:16.863Z'),
            userIds: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->hris->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchHrisLocation

Update a location

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
    $request = new Operations\PatchHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Jeanieshire',
                country: 'Lao People\'s Democratic Republic',
                countryCode: 'SA',
                postalCode: '01257-5261',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-01-19T04:39:31.681Z'),
            currency: 'Swiss Franc',
            description: 'Multi-lateral maximized website',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'like' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'Asia/Tehran',
            updatedAt: Utils\Utils::parseDateTime('2024-08-09T18:51:28.735Z'),
        ),
    );
    $response = $sdk->hris->patchHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisLocationRequest](../../Models/Operations/PatchHrisLocationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\PatchHrisLocationResponse](../../Models/Operations/PatchHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeHrisCompany

Remove a company

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
    $request = new Operations\RemoveHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->hris->removeHrisCompany($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisCompanyRequest](../../Models/Operations/RemoveHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\RemoveHrisCompanyResponse](../../Models/Operations/RemoveHrisCompanyResponse.md)**
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
    $response = $sdk->hris->removeHrisEmployee($request);

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

## removeHrisGroup

Remove a group

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
    $request = new Operations\RemoveHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->hris->removeHrisGroup($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeHrisLocation

Remove a location

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
    $request = new Operations\RemoveHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->hris->removeHrisLocation($request);

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
| `$request`                                                                                   | [Operations\RemoveHrisLocationRequest](../../Models/Operations/RemoveHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\RemoveHrisLocationResponse](../../Models/Operations/RemoveHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateHrisCompany

Update a company

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
    $request = new Operations\UpdateHrisCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisCompany: new Shared\HrisCompany(
            address: new Shared\PropertyHrisCompanyAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Rancho Santa Margarita',
                country: 'Somalia',
                countryCode: 'CL',
                postalCode: '49321',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-11-24T00:12:57.019Z'),
            id: '<id>',
            legalName: '<value>',
            name: '<value>',
            raw: [
                'Coordinator' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-09-01T17:36:17.033Z'),
        ),
    );
    $response = $sdk->hris->updateHrisCompany($request);

    if ($response->hrisCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisCompanyRequest](../../Models/Operations/UpdateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\UpdateHrisCompanyResponse](../../Models/Operations/UpdateHrisCompanyResponse.md)**
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
    );
    $response = $sdk->hris->updateHrisEmployee($request);

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

## updateHrisGroup

Update a group

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
    $request = new Operations\UpdateHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-12-07T01:08:49.621Z'),
            description: 'Integrated empowering productivity',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'Southwest' => '<value>',
            ],
            type: Shared\HrisGroupType::Team,
            updatedAt: Utils\Utils::parseDateTime('2022-03-09T14:54:15.549Z'),
            userIds: [
                '<value>',
            ],
        ),
    );
    $response = $sdk->hris->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateHrisLocation

Update a location

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
    $request = new Operations\UpdateHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Willieton',
                country: 'Antarctica (the territory South of 60 deg S)',
                countryCode: 'AM',
                postalCode: '16560',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-02-06T16:46:59.275Z'),
            currency: 'Guinea Franc',
            description: 'Horizontal solution-oriented conglomeration',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'West' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'Asia/Kamchatka',
            updatedAt: Utils\Utils::parseDateTime('2024-02-23T01:10:31.769Z'),
        ),
    );
    $response = $sdk->hris->updateHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisLocationRequest](../../Models/Operations/UpdateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\UpdateHrisLocationResponse](../../Models/Operations/UpdateHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
