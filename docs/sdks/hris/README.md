# Hris

## Overview

### Available Operations

* [createHrisBankaccount2](#createhrisbankaccount2) - Create a bankaccount
* [createHrisBenefit2](#createhrisbenefit2) - Create a benefit
* [createHrisCompany2](#createhriscompany2) - Create a company
* [createHrisDeduction2](#createhrisdeduction2) - Create a deduction
* [createHrisDevice2](#createhrisdevice2) - Create a device
* [createHrisEmployee2](#createhrisemployee2) - Create an employee
* [createHrisGroup2](#createhrisgroup2) - Create a group
* [createHrisLocation2](#createhrislocation2) - Create a location
* [createHrisTimeoff2](#createhristimeoff2) - Create a timeoff
* [createHrisTimeshift2](#createhristimeshift2) - Create a timeshift
* [getHrisBankaccount2](#gethrisbankaccount2) - Retrieve a bankaccount
* [getHrisBenefit2](#gethrisbenefit2) - Retrieve a benefit
* [getHrisCompany2](#gethriscompany2) - Retrieve a company
* [getHrisDeduction2](#gethrisdeduction2) - Retrieve a deduction
* [getHrisDevice2](#gethrisdevice2) - Retrieve a device
* [getHrisEmployee2](#gethrisemployee2) - Retrieve an employee
* [getHrisGroup2](#gethrisgroup2) - Retrieve a group
* [getHrisLocation2](#gethrislocation2) - Retrieve a location
* [getHrisPayslip2](#gethrispayslip2) - Retrieve a payslip
* [getHrisTimeoff2](#gethristimeoff2) - Retrieve a timeoff
* [getHrisTimeshift2](#gethristimeshift2) - Retrieve a timeshift
* [listHrisBankaccounts2](#listhrisbankaccounts2) - List all bankaccounts
* [listHrisBenefits2](#listhrisbenefits2) - List all benefits
* [listHrisCompanies2](#listhriscompanies2) - List all companies
* [listHrisDeductions2](#listhrisdeductions2) - List all deductions
* [listHrisDevices2](#listhrisdevices2) - List all devices
* [listHrisEmployees2](#listhrisemployees2) - List all employees
* [listHrisGroups2](#listhrisgroups2) - List all groups
* [listHrisLocations2](#listhrislocations2) - List all locations
* [listHrisPayslips2](#listhrispayslips2) - List all payslips
* [listHrisTimeoffs2](#listhristimeoffs2) - List all timeoffs
* [listHrisTimeshifts2](#listhristimeshifts2) - List all timeshifts
* [patchHrisBankaccount2](#patchhrisbankaccount2) - Update a bankaccount
* [patchHrisBenefit2](#patchhrisbenefit2) - Update a benefit
* [patchHrisCompany2](#patchhriscompany2) - Update a company
* [patchHrisDeduction2](#patchhrisdeduction2) - Update a deduction
* [patchHrisDevice2](#patchhrisdevice2) - Update a device
* [patchHrisEmployee2](#patchhrisemployee2) - Update an employee
* [patchHrisGroup2](#patchhrisgroup2) - Update a group
* [patchHrisLocation2](#patchhrislocation2) - Update a location
* [patchHrisTimeoff2](#patchhristimeoff2) - Update a timeoff
* [patchHrisTimeshift2](#patchhristimeshift2) - Update a timeshift
* [removeHrisBankaccount2](#removehrisbankaccount2) - Remove a bankaccount
* [removeHrisBenefit2](#removehrisbenefit2) - Remove a benefit
* [removeHrisCompany2](#removehriscompany2) - Remove a company
* [removeHrisDeduction2](#removehrisdeduction2) - Remove a deduction
* [removeHrisDevice2](#removehrisdevice2) - Remove a device
* [removeHrisEmployee2](#removehrisemployee2) - Remove an employee
* [removeHrisGroup2](#removehrisgroup2) - Remove a group
* [removeHrisLocation2](#removehrislocation2) - Remove a location
* [removeHrisTimeoff2](#removehristimeoff2) - Remove a timeoff
* [removeHrisTimeshift2](#removehristimeshift2) - Remove a timeshift
* [updateHrisBankaccount2](#updatehrisbankaccount2) - Update a bankaccount
* [updateHrisBenefit2](#updatehrisbenefit2) - Update a benefit
* [updateHrisCompany2](#updatehriscompany2) - Update a company
* [updateHrisDeduction2](#updatehrisdeduction2) - Update a deduction
* [updateHrisDevice2](#updatehrisdevice2) - Update a device
* [updateHrisEmployee2](#updatehrisemployee2) - Update an employee
* [updateHrisGroup2](#updatehrisgroup2) - Update a group
* [updateHrisLocation2](#updatehrislocation2) - Update a location
* [updateHrisTimeoff2](#updatehristimeoff2) - Update a timeoff
* [updateHrisTimeshift2](#updatehristimeshift2) - Update a timeshift

## createHrisBankaccount2

Create a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBankaccount2" method="post" path="/hris/{connection_id}/bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateHrisBankaccount2Request](../../Models/Operations/CreateHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateHrisBankaccount2Response](../../Models/Operations/CreateHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisBenefit2

Create a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBenefit2" method="post" path="/hris/{connection_id}/benefit" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisBenefit2Request](../../Models/Operations/CreateHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisBenefit2Response](../../Models/Operations/CreateHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisCompany2" method="post" path="/hris/{connection_id}/company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisCompany2Request](../../Models/Operations/CreateHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisCompany2Response](../../Models/Operations/CreateHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDeduction2

Create a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDeduction2" method="post" path="/hris/{connection_id}/deduction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisDeduction2Request](../../Models/Operations/CreateHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisDeduction2Response](../../Models/Operations/CreateHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDevice2

Create a device

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDevice2" method="post" path="/hris/{connection_id}/device" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisDevice2Request](../../Models/Operations/CreateHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisDevice2Response](../../Models/Operations/CreateHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisEmployee2

Create an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisEmployee2" method="post" path="/hris/{connection_id}/employee" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisEmployee2Request](../../Models/Operations/CreateHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisEmployee2Response](../../Models/Operations/CreateHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisGroup2

Create a group

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisGroup2" method="post" path="/hris/{connection_id}/group" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateHrisGroup2Request](../../Models/Operations/CreateHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateHrisGroup2Response](../../Models/Operations/CreateHrisGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisLocation2

Create a location

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisLocation2" method="post" path="/hris/{connection_id}/location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisLocation2Request](../../Models/Operations/CreateHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisLocation2Response](../../Models/Operations/CreateHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisTimeoff2

Create a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeoff2" method="post" path="/hris/{connection_id}/timeoff" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisTimeoff2Request](../../Models/Operations/CreateHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisTimeoff2Response](../../Models/Operations/CreateHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisTimeshift2

Create a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeshift2" method="post" path="/hris/{connection_id}/timeshift" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisTimeshift2Request](../../Models/Operations/CreateHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisTimeshift2Response](../../Models/Operations/CreateHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBankaccount2

Retrieve a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBankaccount2" method="get" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisBankaccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetHrisBankaccount2Request](../../Models/Operations/GetHrisBankaccount2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetHrisBankaccount2Response](../../Models/Operations/GetHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBenefit2

Retrieve a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBenefit2" method="get" path="/hris/{connection_id}/benefit/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisBenefit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisBenefit2Request](../../Models/Operations/GetHrisBenefit2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisBenefit2Response](../../Models/Operations/GetHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisCompany2" method="get" path="/hris/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisCompany2Request](../../Models/Operations/GetHrisCompany2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisCompany2Response](../../Models/Operations/GetHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDeduction2

Retrieve a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDeduction2" method="get" path="/hris/{connection_id}/deduction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisDeduction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisDeduction2Request](../../Models/Operations/GetHrisDeduction2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisDeduction2Response](../../Models/Operations/GetHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDevice2

Retrieve a device

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDevice2" method="get" path="/hris/{connection_id}/device/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisDevice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisDevice2Request](../../Models/Operations/GetHrisDevice2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisDevice2Response](../../Models/Operations/GetHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisEmployee2

Retrieve an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisEmployee2" method="get" path="/hris/{connection_id}/employee/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisEmployee2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisEmployee2Request](../../Models/Operations/GetHrisEmployee2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisEmployee2Response](../../Models/Operations/GetHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisGroup2

Retrieve a group

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisGroup2" method="get" path="/hris/{connection_id}/group/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetHrisGroup2Request](../../Models/Operations/GetHrisGroup2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetHrisGroup2Response](../../Models/Operations/GetHrisGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisLocation2" method="get" path="/hris/{connection_id}/location/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisLocation2Request](../../Models/Operations/GetHrisLocation2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisLocation2Response](../../Models/Operations/GetHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisPayslip2

Retrieve a payslip

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPayslip2" method="get" path="/hris/{connection_id}/payslip/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisPayslip2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisPayslip2(
    request: $request
);

if ($response->hrisPayslip !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisPayslip2Request](../../Models/Operations/GetHrisPayslip2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisPayslip2Response](../../Models/Operations/GetHrisPayslip2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeoff2

Retrieve a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeoff2" method="get" path="/hris/{connection_id}/timeoff/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisTimeoff2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisTimeoff2Request](../../Models/Operations/GetHrisTimeoff2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisTimeoff2Response](../../Models/Operations/GetHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeshift2

Retrieve a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeshift2" method="get" path="/hris/{connection_id}/timeshift/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetHrisTimeshift2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisTimeshift2Request](../../Models/Operations/GetHrisTimeshift2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisTimeshift2Response](../../Models/Operations/GetHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBankaccounts2

List all bankaccounts

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBankaccounts2" method="get" path="/hris/{connection_id}/bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisBankaccounts2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisBankaccounts2(
    request: $request
);

if ($response->hrisBankaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListHrisBankaccounts2Request](../../Models/Operations/ListHrisBankaccounts2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListHrisBankaccounts2Response](../../Models/Operations/ListHrisBankaccounts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBenefits2

List all benefits

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBenefits2" method="get" path="/hris/{connection_id}/benefit" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisBenefits2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisBenefits2(
    request: $request
);

if ($response->hrisBenefits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisBenefits2Request](../../Models/Operations/ListHrisBenefits2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisBenefits2Response](../../Models/Operations/ListHrisBenefits2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisCompanies2" method="get" path="/hris/{connection_id}/company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisCompanies2(
    request: $request
);

if ($response->hrisCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisCompanies2Request](../../Models/Operations/ListHrisCompanies2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisCompanies2Response](../../Models/Operations/ListHrisCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDeductions2

List all deductions

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDeductions2" method="get" path="/hris/{connection_id}/deduction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisDeductions2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisDeductions2(
    request: $request
);

if ($response->hrisDeductions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisDeductions2Request](../../Models/Operations/ListHrisDeductions2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisDeductions2Response](../../Models/Operations/ListHrisDeductions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDevices2

List all devices

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDevices2" method="get" path="/hris/{connection_id}/device" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisDevices2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisDevices2(
    request: $request
);

if ($response->hrisDevices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisDevices2Request](../../Models/Operations/ListHrisDevices2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisDevices2Response](../../Models/Operations/ListHrisDevices2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisEmployees2

List all employees

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisEmployees2" method="get" path="/hris/{connection_id}/employee" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisEmployees2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisEmployees2(
    request: $request
);

if ($response->hrisEmployees !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisEmployees2Request](../../Models/Operations/ListHrisEmployees2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisEmployees2Response](../../Models/Operations/ListHrisEmployees2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisGroups2

List all groups

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisGroups2" method="get" path="/hris/{connection_id}/group" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisGroups2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisGroups2(
    request: $request
);

if ($response->hrisGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListHrisGroups2Request](../../Models/Operations/ListHrisGroups2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListHrisGroups2Response](../../Models/Operations/ListHrisGroups2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisLocations2" method="get" path="/hris/{connection_id}/location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisLocations2(
    request: $request
);

if ($response->hrisLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisLocations2Request](../../Models/Operations/ListHrisLocations2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisLocations2Response](../../Models/Operations/ListHrisLocations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPayslips2

List all payslips

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPayslips2" method="get" path="/hris/{connection_id}/payslip" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisPayslips2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisPayslips2(
    request: $request
);

if ($response->hrisPayslips !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisPayslips2Request](../../Models/Operations/ListHrisPayslips2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisPayslips2Response](../../Models/Operations/ListHrisPayslips2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeoffs2

List all timeoffs

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeoffs2" method="get" path="/hris/{connection_id}/timeoff" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisTimeoffs2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisTimeoffs2(
    request: $request
);

if ($response->hrisTimeoffs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisTimeoffs2Request](../../Models/Operations/ListHrisTimeoffs2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisTimeoffs2Response](../../Models/Operations/ListHrisTimeoffs2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeshifts2

List all timeshifts

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeshifts2" method="get" path="/hris/{connection_id}/timeshift" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListHrisTimeshifts2Request(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisTimeshifts2(
    request: $request
);

if ($response->hrisTimeshifts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisTimeshifts2Request](../../Models/Operations/ListHrisTimeshifts2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisTimeshifts2Response](../../Models/Operations/ListHrisTimeshifts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBankaccount2

Update a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBankaccount2" method="patch" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchHrisBankaccount2Request](../../Models/Operations/PatchHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchHrisBankaccount2Response](../../Models/Operations/PatchHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBenefit2

Update a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBenefit2" method="patch" path="/hris/{connection_id}/benefit/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisBenefit2Request](../../Models/Operations/PatchHrisBenefit2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisBenefit2Response](../../Models/Operations/PatchHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisCompany2" method="patch" path="/hris/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisCompany2Request](../../Models/Operations/PatchHrisCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisCompany2Response](../../Models/Operations/PatchHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDeduction2

Update a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDeduction2" method="patch" path="/hris/{connection_id}/deduction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisDeduction2Request](../../Models/Operations/PatchHrisDeduction2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisDeduction2Response](../../Models/Operations/PatchHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDevice2

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDevice2" method="patch" path="/hris/{connection_id}/device/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisDevice2Request](../../Models/Operations/PatchHrisDevice2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisDevice2Response](../../Models/Operations/PatchHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisEmployee2

Update an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisEmployee2" method="patch" path="/hris/{connection_id}/employee/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisEmployee2Request](../../Models/Operations/PatchHrisEmployee2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisEmployee2Response](../../Models/Operations/PatchHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisGroup2" method="patch" path="/hris/{connection_id}/group/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchHrisGroup2Request](../../Models/Operations/PatchHrisGroup2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchHrisGroup2Response](../../Models/Operations/PatchHrisGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisLocation2" method="patch" path="/hris/{connection_id}/location/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisLocation2Request](../../Models/Operations/PatchHrisLocation2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisLocation2Response](../../Models/Operations/PatchHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeoff2

Update a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeoff2" method="patch" path="/hris/{connection_id}/timeoff/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisTimeoff2Request](../../Models/Operations/PatchHrisTimeoff2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisTimeoff2Response](../../Models/Operations/PatchHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeshift2

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeshift2" method="patch" path="/hris/{connection_id}/timeshift/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisTimeshift2Request](../../Models/Operations/PatchHrisTimeshift2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisTimeshift2Response](../../Models/Operations/PatchHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBankaccount2

Remove a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBankaccount2" method="delete" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisBankaccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisBankaccount2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveHrisBankaccount2Request](../../Models/Operations/RemoveHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveHrisBankaccount2Response](../../Models/Operations/RemoveHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBenefit2

Remove a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBenefit2" method="delete" path="/hris/{connection_id}/benefit/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisBenefit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisBenefit2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisBenefit2Request](../../Models/Operations/RemoveHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisBenefit2Response](../../Models/Operations/RemoveHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisCompany2" method="delete" path="/hris/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisCompany2Request](../../Models/Operations/RemoveHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisCompany2Response](../../Models/Operations/RemoveHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDeduction2

Remove a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDeduction2" method="delete" path="/hris/{connection_id}/deduction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisDeduction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisDeduction2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisDeduction2Request](../../Models/Operations/RemoveHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisDeduction2Response](../../Models/Operations/RemoveHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDevice2

Remove a device

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDevice2" method="delete" path="/hris/{connection_id}/device/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisDevice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisDevice2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisDevice2Request](../../Models/Operations/RemoveHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisDevice2Response](../../Models/Operations/RemoveHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisEmployee2

Remove an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisEmployee2" method="delete" path="/hris/{connection_id}/employee/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisEmployee2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisEmployee2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisEmployee2Request](../../Models/Operations/RemoveHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisEmployee2Response](../../Models/Operations/RemoveHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisGroup2

Remove a group

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisGroup2" method="delete" path="/hris/{connection_id}/group/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisGroup2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisGroup2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveHrisGroup2Request](../../Models/Operations/RemoveHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveHrisGroup2Response](../../Models/Operations/RemoveHrisGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisLocation2

Remove a location

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisLocation2" method="delete" path="/hris/{connection_id}/location/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisLocation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisLocation2Request](../../Models/Operations/RemoveHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisLocation2Response](../../Models/Operations/RemoveHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeoff2

Remove a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeoff2" method="delete" path="/hris/{connection_id}/timeoff/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisTimeoff2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisTimeoff2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisTimeoff2Request](../../Models/Operations/RemoveHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisTimeoff2Response](../../Models/Operations/RemoveHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeshift2

Remove a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeshift2" method="delete" path="/hris/{connection_id}/timeshift/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveHrisTimeshift2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisTimeshift2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisTimeshift2Request](../../Models/Operations/RemoveHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisTimeshift2Response](../../Models/Operations/RemoveHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBankaccount2

Update a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBankaccount2" method="put" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateHrisBankaccount2Request](../../Models/Operations/UpdateHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateHrisBankaccount2Response](../../Models/Operations/UpdateHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBenefit2

Update a benefit

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBenefit2" method="put" path="/hris/{connection_id}/benefit/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisBenefit2Request(
    hrisBenefit: new Shared\HrisBenefit(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisBenefit2(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisBenefit2Request](../../Models/Operations/UpdateHrisBenefit2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisBenefit2Response](../../Models/Operations/UpdateHrisBenefit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisCompany2" method="put" path="/hris/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisCompany2Request](../../Models/Operations/UpdateHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisCompany2Response](../../Models/Operations/UpdateHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDeduction2

Update a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDeduction2" method="put" path="/hris/{connection_id}/deduction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisDeduction2Request](../../Models/Operations/UpdateHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisDeduction2Response](../../Models/Operations/UpdateHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDevice2

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDevice2" method="put" path="/hris/{connection_id}/device/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisDevice2Request](../../Models/Operations/UpdateHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisDevice2Response](../../Models/Operations/UpdateHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisEmployee2

Update an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisEmployee2" method="put" path="/hris/{connection_id}/employee/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisEmployee2Request](../../Models/Operations/UpdateHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisEmployee2Response](../../Models/Operations/UpdateHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisGroup2

Update a group

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisGroup2" method="put" path="/hris/{connection_id}/group/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisGroup2Request(
    hrisGroup: new Shared\HrisGroup(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisGroup2(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateHrisGroup2Request](../../Models/Operations/UpdateHrisGroup2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateHrisGroup2Response](../../Models/Operations/UpdateHrisGroup2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisLocation2" method="put" path="/hris/{connection_id}/location/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisLocation2Request(
    hrisLocation: new Shared\HrisLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisLocation2(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisLocation2Request](../../Models/Operations/UpdateHrisLocation2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisLocation2Response](../../Models/Operations/UpdateHrisLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeoff2

Update a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeoff2" method="put" path="/hris/{connection_id}/timeoff/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisTimeoff2Request](../../Models/Operations/UpdateHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisTimeoff2Response](../../Models/Operations/UpdateHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeshift2

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeshift2" method="put" path="/hris/{connection_id}/timeshift/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisTimeshift2Request](../../Models/Operations/UpdateHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisTimeshift2Response](../../Models/Operations/UpdateHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |