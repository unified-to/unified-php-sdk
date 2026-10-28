# Hris

## Overview

### Available Operations

* [createHrisAttendance](#createhrisattendance) - Create an attendance
* [createHrisBankaccount](#createhrisbankaccount) - Create a bankaccount
* [createHrisBenefit](#createhrisbenefit) - Create a benefit
* [createHrisCompany](#createhriscompany) - Create a company
* [createHrisDeduction](#createhrisdeduction) - Create a deduction
* [createHrisDevice](#createhrisdevice) - Create a device
* [createHrisDocument](#createhrisdocument) - Create a document
* [createHrisEarning](#createhrisearning) - Create an earning
* [createHrisEmployee](#createhrisemployee) - Create an employee
* [createHrisGroup](#createhrisgroup) - Create a group
* [createHrisJob](#createhrisjob) - Create a job
* [createHrisLocation](#createhrislocation) - Create a location
* [createHrisTaxonomy](#createhristaxonomy) - Create a taxonomy
* [createHrisTimeoff](#createhristimeoff) - Create a timeoff
* [createHrisTimeshift](#createhristimeshift) - Create a timeshift
* [getHrisAttendance](#gethrisattendance) - Retrieve an attendance
* [getHrisBankaccount](#gethrisbankaccount) - Retrieve a bankaccount
* [getHrisBenefit](#gethrisbenefit) - Retrieve a benefit
* [getHrisCompany](#gethriscompany) - Retrieve a company
* [getHrisDeduction](#gethrisdeduction) - Retrieve a deduction
* [getHrisDevice](#gethrisdevice) - Retrieve a device
* [getHrisDocument](#gethrisdocument) - Retrieve a document
* [getHrisEarning](#gethrisearning) - Retrieve an earning
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [getHrisJob](#gethrisjob) - Retrieve a job
* [getHrisLocation](#gethrislocation) - Retrieve a location
* [getHrisPaycode](#gethrispaycode) - Retrieve a paycode
* [getHrisPayroll](#gethrispayroll) - Retrieve a payroll
* [getHrisPayslip](#gethrispayslip) - Retrieve a payslip
* [getHrisTaxonomy](#gethristaxonomy) - Retrieve a taxonomy
* [getHrisTimeoff](#gethristimeoff) - Retrieve a timeoff
* [getHrisTimeshift](#gethristimeshift) - Retrieve a timeshift
* [listHrisAttendances](#listhrisattendances) - List all attendances
* [listHrisBankaccounts](#listhrisbankaccounts) - List all bankaccounts
* [listHrisBenefits](#listhrisbenefits) - List all benefits
* [listHrisCompanies](#listhriscompanies) - List all companies
* [listHrisDeductions](#listhrisdeductions) - List all deductions
* [listHrisDevices](#listhrisdevices) - List all devices
* [listHrisDocuments](#listhrisdocuments) - List all documents
* [listHrisEarnings](#listhrisearnings) - List all earnings
* [listHrisEmployees](#listhrisemployees) - List all employees
* [listHrisGroups](#listhrisgroups) - List all groups
* [listHrisJobs](#listhrisjobs) - List all jobs
* [listHrisLocations](#listhrislocations) - List all locations
* [listHrisPaycodes](#listhrispaycodes) - List all paycodes
* [listHrisPayrolls](#listhrispayrolls) - List all payrolls
* [listHrisPayslips](#listhrispayslips) - List all payslips
* [listHrisTaxonomies](#listhristaxonomies) - List all taxonomies
* [listHrisTimeoffs](#listhristimeoffs) - List all timeoffs
* [listHrisTimeshifts](#listhristimeshifts) - List all timeshifts
* [patchHrisAttendance](#patchhrisattendance) - Update an attendance
* [patchHrisBankaccount](#patchhrisbankaccount) - Update a bankaccount
* [patchHrisBenefit](#patchhrisbenefit) - Update a benefit
* [patchHrisCompany](#patchhriscompany) - Update a company
* [patchHrisDeduction](#patchhrisdeduction) - Update a deduction
* [patchHrisDevice](#patchhrisdevice) - Update a device
* [patchHrisDocument](#patchhrisdocument) - Update a document
* [patchHrisEarning](#patchhrisearning) - Update an earning
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [patchHrisJob](#patchhrisjob) - Update a job
* [patchHrisLocation](#patchhrislocation) - Update a location
* [patchHrisTimeoff](#patchhristimeoff) - Update a timeoff
* [patchHrisTimeshift](#patchhristimeshift) - Update a timeshift
* [removeHrisAttendance](#removehrisattendance) - Remove an attendance
* [removeHrisBankaccount](#removehrisbankaccount) - Remove a bankaccount
* [removeHrisBenefit](#removehrisbenefit) - Remove a benefit
* [removeHrisCompany](#removehriscompany) - Remove a company
* [removeHrisDeduction](#removehrisdeduction) - Remove a deduction
* [removeHrisDevice](#removehrisdevice) - Remove a device
* [removeHrisDocument](#removehrisdocument) - Remove a document
* [removeHrisEarning](#removehrisearning) - Remove an earning
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [removeHrisJob](#removehrisjob) - Remove a job
* [removeHrisLocation](#removehrislocation) - Remove a location
* [removeHrisTimeoff](#removehristimeoff) - Remove a timeoff
* [removeHrisTimeshift](#removehristimeshift) - Remove a timeshift
* [updateHrisAttendance](#updatehrisattendance) - Update an attendance
* [updateHrisBankaccount](#updatehrisbankaccount) - Update a bankaccount
* [updateHrisBenefit](#updatehrisbenefit) - Update a benefit
* [updateHrisCompany](#updatehriscompany) - Update a company
* [updateHrisDeduction](#updatehrisdeduction) - Update a deduction
* [updateHrisDevice](#updatehrisdevice) - Update a device
* [updateHrisDocument](#updatehrisdocument) - Update a document
* [updateHrisEarning](#updatehrisearning) - Update an earning
* [updateHrisEmployee](#updatehrisemployee) - Update an employee
* [updateHrisGroup](#updatehrisgroup) - Update a group
* [updateHrisJob](#updatehrisjob) - Update a job
* [updateHrisLocation](#updatehrislocation) - Update a location
* [updateHrisTimeoff](#updatehristimeoff) - Update a timeoff
* [updateHrisTimeshift](#updatehristimeshift) - Update a timeshift

## createHrisAttendance

Creates a HrisAttendance. Provide the unified HrisAttendance fields in the request body; they are mapped to the provider's API. Returns the created HrisAttendance.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisAttendance" method="post" path="/hris/{connection_id}/attendance" example="hris_attendance" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T17:36:27.251Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-17T22:01:08.253Z'),
                id: 'fbea3669-1f17-44a6-8f46-6d26772021ac',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-01T22:20:06.316Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-26T22:36:24.433Z'),
        hourlyRate: 16,
        hours: 10,
        id: 'fc695502-3f7f-457d-801f-ac68c974b54e',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T09:02:53.271Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T11:20:09.084Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisAttendanceRequest](../../Models/Operations/CreateHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisAttendanceResponse](../../Models/Operations/CreateHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisBankaccount

Creates a HrisBankaccount. Provide the unified HrisBankaccount fields in the request body; they are mapped to the provider's API. Returns the created HrisBankaccount.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBankaccount" method="post" path="/hris/{connection_id}/bankaccount" example="hris_bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '644f07da-6fc7-4175-9bf1-d0743d11d77f',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-06T21:50:16.592Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateHrisBankaccountRequest](../../Models/Operations/CreateHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateHrisBankaccountResponse](../../Models/Operations/CreateHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisBenefit

Creates a HrisBenefit. Provide the unified HrisBenefit fields in the request body; they are mapped to the provider's API. Returns the created HrisBenefit.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBenefit" method="post" path="/hris/{connection_id}/benefit" example="hris_benefit" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisBenefitRequest(
    hrisBenefit: new Shared\HrisBenefit(
        coverageLevel: Shared\CoverageLevel::EmployeeSpouse,
        createdAt: Utils\Utils::parseDateTime('2020-06-11T01:24:05.654Z'),
        currency: 'GBP',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Month,
        id: '6b05cd9b-6e36-4d4f-a927-bef45fc4b80b',
        isActive: false,
        metadata: [],
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Other,
        updatedAt: Utils\Utils::parseDateTime('2023-03-23T21:07:58.391Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisBenefit(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisBenefitRequest](../../Models/Operations/CreateHrisBenefitRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisBenefitResponse](../../Models/Operations/CreateHrisBenefitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisCompany

Creates a HrisCompany. Provide the unified HrisCompany fields in the request body; they are mapped to the provider's API. Returns the created HrisCompany.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisCompany" method="post" path="/hris/{connection_id}/company" example="hris_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '675 Lavinia Lights',
            city: 'Rocky Mount',
            countryCode: 'US',
            postalCode: '67325',
            region: 'Kentucky',
            regionCode: 'MO',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '551b8e03-dd56-4dd4-b2e6-37d7fb38d310',
        legalName: 'Gottlieb Group LLC',
        metadata: [],
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-10-15T14:17:14.697Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisCompanyRequest](../../Models/Operations/CreateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisCompanyResponse](../../Models/Operations/CreateHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDeduction

Creates a HrisDeduction. Provide the unified HrisDeduction fields in the request body; they are mapped to the provider's API. Returns the created HrisDeduction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDeduction" method="post" path="/hris/{connection_id}/deduction" example="hris_deduction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: '2a45fe8d-7476-4074-a674-951a179271dd',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-20T14:46:30.248Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-26T13:41:31.855Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisDeductionRequest](../../Models/Operations/CreateHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisDeductionResponse](../../Models/Operations/CreateHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDevice

Creates a HrisDevice. Provide the unified HrisDevice fields in the request body; they are mapped to the provider's API. Returns the created HrisDevice.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDevice" method="post" path="/hris/{connection_id}/device" example="hris_device" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'fJNacaaoWi',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: true,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: false,
        id: 'dd13219a-542c-4bfb-a1a2-46f1713ea9c1',
        isMissing: false,
        manufacturer: 'Hackett Inc',
        metadata: [],
        model: 'Fantastic',
        name: 'august-laptop',
        os: 'transmitter',
        osVersion: '8.4.8',
        updatedAt: Utils\Utils::parseDateTime('2023-06-12T03:44:48.419Z'),
        version: '4.15.7',
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateHrisDeviceRequest](../../Models/Operations/CreateHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateHrisDeviceResponse](../../Models/Operations/CreateHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisDocument

Creates a HrisDocument. Provide the unified HrisDocument fields in the request body; they are mapped to the provider's API. Returns the created HrisDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDocument" method="post" path="/hris/{connection_id}/document" example="hris_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: '0eea8755-f7c3-40b6-afda-0ab561ae91b6',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-16T18:03:54.214Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisDocumentRequest](../../Models/Operations/CreateHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisDocumentResponse](../../Models/Operations/CreateHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisEarning

Creates a HrisEarning. Provide the unified HrisEarning fields in the request body; they are mapped to the provider's API. Returns the created HrisEarning.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisEarning" method="post" path="/hris/{connection_id}/earning" example="hris_earning" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'USD',
        frequency: Shared\HrisEarningFrequency::Semimonthly,
        id: '5d90dfd5-187e-4cde-95e4-acbd6dd80bdf',
        metadata: [],
        notes: 'Deporto truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-28T15:13:35.309Z'),
        status: Shared\HrisEarningStatus::Ended,
        updatedAt: Utils\Utils::parseDateTime('2020-02-09T18:54:28.753Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisEarningRequest](../../Models/Operations/CreateHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisEarningResponse](../../Models/Operations/CreateHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisEmployee

Creates a HrisEmployee. Provide the unified HrisEmployee fields in the request body; they are mapped to the provider's API. Returns the created HrisEmployee.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisEmployee" method="post" path="/hris/{connection_id}/employee" example="hris_employee" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisEmployeeRequest(
    hrisEmployee: new Shared\HrisEmployee(
        address: new Shared\PropertyHrisEmployeeAddress(
            address1: '7431 Hintz Parkway',
            address2: 'Apt. 520',
            city: 'Port Rogerview',
            countryCode: 'US',
            postalCode: '01711',
            region: 'Missouri',
            regionCode: 'TN',
        ),
        bio: 'fun advocate  🇱🇻',
        compensation: [
            new Shared\HrisCompensation(
                amount: 95000,
                currency: 'USD',
                frequency: Shared\HrisCompensationFrequency::Year,
                notes: 'Eius.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'USD',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'zetta.prohaska@insidious-stump.net',
                type: Shared\HrisEmailType::Work,
            ),
        ],
        employeeNumber: 'uCk3qaL1ei',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::PartTime,
        firstName: 'Zetta',
        flsaStatus: Shared\FlsaStatus::Exempt,
        gender: Shared\HrisEmployeeGender::Male,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        id: 'fe913bed-9a88-4308-8328-a84e616ff845',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\HrisEmployeeMaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'bb90c24d-8329-44ae-825d-7be11cc472d9',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tutis',
            ),
        ],
        name: 'Zetta Prohaska',
        payFrequency: Shared\PayFrequency::Week,
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keith.prohaska@gmail.com',
                    ),
                ],
                name: 'Keith Prohaska',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keely.prohaska@icloud.com',
                    ),
                ],
                name: 'Keely Prohaska',
                type: Shared\HrisEmployeerelationshipType::Other,
            ),
        ],
        salutation: 'Ms.',
        ssnSin: '284-82-8167',
        storageQuotaAllocated: 3653713,
        storageQuotaAvailable: 3017275,
        storageQuotaUsed: 367449,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(320) 980-1370',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(694) 840-0166',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timeoffDaysTotal: 17,
        timeoffDaysUsed: 9,
        timezone: 'Europe/Ljubljana',
        title: 'District Branding Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T23:57:34.240Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisEmployee(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisGroup

Creates a HrisGroup. Provide the unified HrisGroup fields in the request body; they are mapped to the provider's API. Returns the created HrisGroup.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisGroup" method="post" path="/hris/{connection_id}/group" example="hris_group" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: 'db553239-7579-40a6-b391-e7c7660c7762',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-27T22:59:44.338Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisJob

Creates a HrisJob. Provide the unified HrisJob fields in the request body; they are mapped to the provider's API. Returns the created HrisJob.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisJob" method="post" path="/hris/{connection_id}/job" example="hris_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '63b960ca-791a-46bd-bc80-7f3f330be3cc',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-01T20:18:30.460Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateHrisJobRequest](../../Models/Operations/CreateHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateHrisJobResponse](../../Models/Operations/CreateHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisLocation

Creates a HrisLocation. Provide the unified HrisLocation fields in the request body; they are mapped to the provider's API. Returns the created HrisLocation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisLocation" method="post" path="/hris/{connection_id}/location" example="hris_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisLocationRequest(
    hrisLocation: new Shared\HrisLocation(
        address: new Shared\PropertyHrisLocationAddress(
            address1: '4418 Daniella Mall',
            address2: 'Apt. 997',
            city: 'Burke',
            countryCode: 'US',
            postalCode: '54109',
            region: 'Ohio',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MNT',
        description: 'Commemoro acervus.',
        id: '6ee79c3a-2f46-4458-88c2-cf55056e609c',
        isActive: false,
        isHq: true,
        languageLocale: 'it',
        metadata: [],
        name: 'North Kimberlyland Office',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(371) 245-0699',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(700) 845-5854',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(461) 437-3548',
                type: Shared\HrisTelephoneType::Home,
            ),
        ],
        timezone: 'Asia/Jerusalem',
        updatedAt: Utils\Utils::parseDateTime('2023-06-23T15:32:06.322Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisLocation(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisLocationRequest](../../Models/Operations/CreateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisLocationResponse](../../Models/Operations/CreateHrisLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisTaxonomy

Creates a HrisTaxonomy. Provide the unified HrisTaxonomy fields in the request body; they are mapped to the provider's API. Returns the created HrisTaxonomy.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTaxonomy" method="post" path="/hris/{connection_id}/taxonomy" example="hris_taxonomy" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisTaxonomyRequest(
    hrisTaxonomy: new Shared\HrisTaxonomy(
        alternativeNames: [
            'Facilitator',
            'National',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Uterque vespillo adnuo ea commodo turbo suscipio condico.',
        domain: 'Health',
        id: '8a738f3d-4af9-4670-8c37-0ef47860cb43',
        isActive: false,
        metadata: [],
        name: 'International Functionality Architect',
        subcategory: 'Marble',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-05-30T19:20:34.087Z'),
        url: 'https://fixed-membership.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisTaxonomyRequest](../../Models/Operations/CreateHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisTaxonomyResponse](../../Models/Operations/CreateHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisTimeoff

Creates a HrisTimeoff. Provide the unified HrisTimeoff fields in the request body; they are mapped to the provider's API. Returns the created HrisTimeoff.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeoff" method="post" path="/hris/{connection_id}/timeoff" example="hris_timeoff" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.580Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.795Z'),
        id: '01f811e9-8dfe-43d3-8ddc-92e4ca6e85fd',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.060Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.817Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisTimeoffRequest](../../Models/Operations/CreateHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisTimeoffResponse](../../Models/Operations/CreateHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisTimeshift

Creates a HrisTimeshift. Provide the unified HrisTimeshift fields in the request body; they are mapped to the provider's API. Returns the created HrisTimeshift.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeshift" method="post" path="/hris/{connection_id}/timeshift" example="hris_timeshift" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2022-07-20T23:26:01.168Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'GBP',
                frequency: Shared\HrisCompensationFrequency::Semimonthly,
                notes: 'Vehemens annus adficio.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-10-03T22:52:59.461Z'),
        hours: 6,
        id: 'd46d33a5-73a5-4f6f-bff1-f34ecd2c740a',
        isApproved: false,
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-07-16T20:36:47.843Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T19:36:58.919Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->hris->createHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisTimeshiftRequest](../../Models/Operations/CreateHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisTimeshiftResponse](../../Models/Operations/CreateHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisAttendance

Retrieves a single HrisAttendance by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisAttendance" method="get" path="/hris/{connection_id}/attendance/{id}" -->
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

$request = new Operations\GetHrisAttendanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisAttendanceRequest](../../Models/Operations/GetHrisAttendanceRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisAttendanceResponse](../../Models/Operations/GetHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBankaccount

Retrieves a single HrisBankaccount by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBankaccount" method="get" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\GetHrisBankaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetHrisBankaccountRequest](../../Models/Operations/GetHrisBankaccountRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetHrisBankaccountResponse](../../Models/Operations/GetHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBenefit

Retrieves a single HrisBenefit by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBenefit" method="get" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\GetHrisBenefitRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisBenefit(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisBenefitRequest](../../Models/Operations/GetHrisBenefitRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisBenefitResponse](../../Models/Operations/GetHrisBenefitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisCompany

Retrieves a single HrisCompany by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisCompany" method="get" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\GetHrisCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisCompanyRequest](../../Models/Operations/GetHrisCompanyRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisCompanyResponse](../../Models/Operations/GetHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDeduction

Retrieves a single HrisDeduction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDeduction" method="get" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\GetHrisDeductionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisDeductionRequest](../../Models/Operations/GetHrisDeductionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisDeductionResponse](../../Models/Operations/GetHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDevice

Retrieves a single HrisDevice by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDevice" method="get" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\GetHrisDeviceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetHrisDeviceRequest](../../Models/Operations/GetHrisDeviceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetHrisDeviceResponse](../../Models/Operations/GetHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDocument

Retrieves a single HrisDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDocument" method="get" path="/hris/{connection_id}/document/{id}" -->
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

$request = new Operations\GetHrisDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisDocumentRequest](../../Models/Operations/GetHrisDocumentRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisDocumentResponse](../../Models/Operations/GetHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisEarning

Retrieves a single HrisEarning by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisEarning" method="get" path="/hris/{connection_id}/earning/{id}" -->
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

$request = new Operations\GetHrisEarningRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisEarningRequest](../../Models/Operations/GetHrisEarningRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisEarningResponse](../../Models/Operations/GetHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisEmployee

Retrieves a single HrisEmployee by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisEmployee" method="get" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\GetHrisEmployeeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisEmployee(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisGroup

Retrieves a single HrisGroup by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisGroup" method="get" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\GetHrisGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisJob

Retrieves a single HrisJob by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisJob" method="get" path="/hris/{connection_id}/job/{id}" -->
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

$request = new Operations\GetHrisJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetHrisJobRequest](../../Models/Operations/GetHrisJobRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetHrisJobResponse](../../Models/Operations/GetHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisLocation

Retrieves a single HrisLocation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisLocation" method="get" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\GetHrisLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisLocation(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisLocationRequest](../../Models/Operations/GetHrisLocationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisLocationResponse](../../Models/Operations/GetHrisLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisPaycode

Retrieves a single HrisPaycode by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPaycode" method="get" path="/hris/{connection_id}/paycode/{id}" -->
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

$request = new Operations\GetHrisPaycodeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisPaycode(
    request: $request
);

if ($response->hrisPaycode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPaycodeRequest](../../Models/Operations/GetHrisPaycodeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisPaycodeResponse](../../Models/Operations/GetHrisPaycodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisPayroll

Retrieves a single HrisPayroll by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPayroll" method="get" path="/hris/{connection_id}/payroll/{id}" -->
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

$request = new Operations\GetHrisPayrollRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisPayroll(
    request: $request
);

if ($response->hrisPayroll !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPayrollRequest](../../Models/Operations/GetHrisPayrollRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisPayrollResponse](../../Models/Operations/GetHrisPayrollResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisPayslip

Retrieves a single HrisPayslip by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPayslip" method="get" path="/hris/{connection_id}/payslip/{id}" -->
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

$request = new Operations\GetHrisPayslipRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisPayslip(
    request: $request
);

if ($response->hrisPayslip !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPayslipRequest](../../Models/Operations/GetHrisPayslipRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisPayslipResponse](../../Models/Operations/GetHrisPayslipResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTaxonomy

Retrieves a single HrisTaxonomy by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTaxonomy" method="get" path="/hris/{connection_id}/taxonomy/{id}" -->
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

$request = new Operations\GetHrisTaxonomyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisTaxonomyRequest](../../Models/Operations/GetHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisTaxonomyResponse](../../Models/Operations/GetHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeoff

Retrieves a single HrisTimeoff by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeoff" method="get" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\GetHrisTimeoffRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisTimeoffRequest](../../Models/Operations/GetHrisTimeoffRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisTimeoffResponse](../../Models/Operations/GetHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeshift

Retrieves a single HrisTimeshift by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeshift" method="get" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\GetHrisTimeshiftRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->getHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisTimeshiftRequest](../../Models/Operations/GetHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisTimeshiftResponse](../../Models/Operations/GetHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisAttendances

Returns a list of HrisAttendances. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisAttendances" method="get" path="/hris/{connection_id}/attendance" -->
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

$request = new Operations\ListHrisAttendancesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisAttendances(
    request: $request
);

if ($response->hrisAttendances !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisAttendancesRequest](../../Models/Operations/ListHrisAttendancesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisAttendancesResponse](../../Models/Operations/ListHrisAttendancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBankaccounts

Returns a list of HrisBankaccounts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBankaccounts" method="get" path="/hris/{connection_id}/bankaccount" -->
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

$request = new Operations\ListHrisBankaccountsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisBankaccounts(
    request: $request
);

if ($response->hrisBankaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListHrisBankaccountsRequest](../../Models/Operations/ListHrisBankaccountsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListHrisBankaccountsResponse](../../Models/Operations/ListHrisBankaccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBenefits

Returns a list of HrisBenefits. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBenefits" method="get" path="/hris/{connection_id}/benefit" -->
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

$request = new Operations\ListHrisBenefitsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisBenefits(
    request: $request
);

if ($response->hrisBenefits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisBenefitsRequest](../../Models/Operations/ListHrisBenefitsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisBenefitsResponse](../../Models/Operations/ListHrisBenefitsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisCompanies

Returns a list of HrisCompanies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisCompanies" method="get" path="/hris/{connection_id}/company" -->
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

$request = new Operations\ListHrisCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisCompanies(
    request: $request
);

if ($response->hrisCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisCompaniesRequest](../../Models/Operations/ListHrisCompaniesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisCompaniesResponse](../../Models/Operations/ListHrisCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDeductions

Returns a list of HrisDeductions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDeductions" method="get" path="/hris/{connection_id}/deduction" -->
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

$request = new Operations\ListHrisDeductionsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisDeductions(
    request: $request
);

if ($response->hrisDeductions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisDeductionsRequest](../../Models/Operations/ListHrisDeductionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisDeductionsResponse](../../Models/Operations/ListHrisDeductionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDevices

Returns a list of HrisDevices. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDevices" method="get" path="/hris/{connection_id}/device" -->
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

$request = new Operations\ListHrisDevicesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisDevices(
    request: $request
);

if ($response->hrisDevices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListHrisDevicesRequest](../../Models/Operations/ListHrisDevicesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListHrisDevicesResponse](../../Models/Operations/ListHrisDevicesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDocuments

Returns a list of HrisDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDocuments" method="get" path="/hris/{connection_id}/document" -->
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

$request = new Operations\ListHrisDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisDocuments(
    request: $request
);

if ($response->hrisDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisDocumentsRequest](../../Models/Operations/ListHrisDocumentsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisDocumentsResponse](../../Models/Operations/ListHrisDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisEarnings

Returns a list of HrisEarnings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisEarnings" method="get" path="/hris/{connection_id}/earning" -->
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

$request = new Operations\ListHrisEarningsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisEarnings(
    request: $request
);

if ($response->hrisEarnings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisEarningsRequest](../../Models/Operations/ListHrisEarningsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisEarningsResponse](../../Models/Operations/ListHrisEarningsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisEmployees

Returns a list of HrisEmployees. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisEmployees" method="get" path="/hris/{connection_id}/employee" -->
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

$request = new Operations\ListHrisEmployeesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisEmployees(
    request: $request
);

if ($response->hrisEmployees !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisGroups

Returns a list of HrisGroups. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisGroups" method="get" path="/hris/{connection_id}/group" -->
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

$request = new Operations\ListHrisGroupsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisGroups(
    request: $request
);

if ($response->hrisGroups !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisJobs

Returns a list of HrisJobs. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisJobs" method="get" path="/hris/{connection_id}/job" -->
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

$request = new Operations\ListHrisJobsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisJobs(
    request: $request
);

if ($response->hrisJobs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListHrisJobsRequest](../../Models/Operations/ListHrisJobsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListHrisJobsResponse](../../Models/Operations/ListHrisJobsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisLocations

Returns a list of HrisLocations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisLocations" method="get" path="/hris/{connection_id}/location" -->
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

$request = new Operations\ListHrisLocationsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisLocations(
    request: $request
);

if ($response->hrisLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisLocationsRequest](../../Models/Operations/ListHrisLocationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisLocationsResponse](../../Models/Operations/ListHrisLocationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPaycodes

Returns a list of HrisPaycodes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPaycodes" method="get" path="/hris/{connection_id}/paycode" -->
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

$request = new Operations\ListHrisPaycodesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisPaycodes(
    request: $request
);

if ($response->hrisPaycodes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPaycodesRequest](../../Models/Operations/ListHrisPaycodesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisPaycodesResponse](../../Models/Operations/ListHrisPaycodesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPayrolls

Returns a list of HrisPayrolls. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPayrolls" method="get" path="/hris/{connection_id}/payroll" -->
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

$request = new Operations\ListHrisPayrollsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisPayrolls(
    request: $request
);

if ($response->hrisPayrolls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPayrollsRequest](../../Models/Operations/ListHrisPayrollsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisPayrollsResponse](../../Models/Operations/ListHrisPayrollsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPayslips

Returns a list of HrisPayslips. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPayslips" method="get" path="/hris/{connection_id}/payslip" -->
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

$request = new Operations\ListHrisPayslipsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisPayslips(
    request: $request
);

if ($response->hrisPayslips !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPayslipsRequest](../../Models/Operations/ListHrisPayslipsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisPayslipsResponse](../../Models/Operations/ListHrisPayslipsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTaxonomies

Returns a list of HrisTaxonomies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTaxonomies" method="get" path="/hris/{connection_id}/taxonomy" -->
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

$request = new Operations\ListHrisTaxonomiesRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisTaxonomies(
    request: $request
);

if ($response->hrisTaxonomies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisTaxonomiesRequest](../../Models/Operations/ListHrisTaxonomiesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisTaxonomiesResponse](../../Models/Operations/ListHrisTaxonomiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeoffs

Returns a list of HrisTimeoffs. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeoffs" method="get" path="/hris/{connection_id}/timeoff" -->
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

$request = new Operations\ListHrisTimeoffsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisTimeoffs(
    request: $request
);

if ($response->hrisTimeoffs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisTimeoffsRequest](../../Models/Operations/ListHrisTimeoffsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisTimeoffsResponse](../../Models/Operations/ListHrisTimeoffsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeshifts

Returns a list of HrisTimeshifts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeshifts" method="get" path="/hris/{connection_id}/timeshift" -->
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

$request = new Operations\ListHrisTimeshiftsRequest(
    connectionId: '<id>',
);

$response = $sdk->hris->listHrisTimeshifts(
    request: $request
);

if ($response->hrisTimeshifts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisTimeshiftsRequest](../../Models/Operations/ListHrisTimeshiftsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisTimeshiftsResponse](../../Models/Operations/ListHrisTimeshiftsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisAttendance

Updates the HrisAttendance identified by `id`. Provide the unified HrisAttendance fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisAttendance" method="patch" path="/hris/{connection_id}/attendance/{id}" example="hris_attendance" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T17:36:27.252Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-17T22:01:08.262Z'),
                id: '2d19ded7-1a97-4980-b07d-6d112e9b3a5e',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-01T22:20:06.324Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-26T22:36:24.443Z'),
        hourlyRate: 16,
        hours: 10,
        id: 'ed7541ff-3516-4104-846e-ba15003f7c02',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T09:02:53.272Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T11:20:09.085Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisAttendanceRequest](../../Models/Operations/PatchHrisAttendanceRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisAttendanceResponse](../../Models/Operations/PatchHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBankaccount

Updates the HrisBankaccount identified by `id`. Provide the unified HrisBankaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBankaccount" method="patch" path="/hris/{connection_id}/bankaccount/{id}" example="hris_bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '457790c7-2059-4f68-a365-105161fa2112',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-06T21:50:16.605Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchHrisBankaccountRequest](../../Models/Operations/PatchHrisBankaccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchHrisBankaccountResponse](../../Models/Operations/PatchHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBenefit

Updates the HrisBenefit identified by `id`. Provide the unified HrisBenefit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBenefit" method="patch" path="/hris/{connection_id}/benefit/{id}" example="hris_benefit" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisBenefitRequest(
    hrisBenefit: new Shared\HrisBenefit(
        coverageLevel: Shared\CoverageLevel::EmployeeSpouse,
        createdAt: Utils\Utils::parseDateTime('2020-06-11T01:24:05.654Z'),
        currency: 'GBP',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Month,
        id: 'd43ce78d-e29a-4efc-94e1-349c945ba757',
        isActive: false,
        metadata: [],
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Other,
        updatedAt: Utils\Utils::parseDateTime('2023-03-23T21:07:58.399Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisBenefit(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisBenefitRequest](../../Models/Operations/PatchHrisBenefitRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisBenefitResponse](../../Models/Operations/PatchHrisBenefitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisCompany

Updates the HrisCompany identified by `id`. Provide the unified HrisCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisCompany" method="patch" path="/hris/{connection_id}/company/{id}" example="hris_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '675 Lavinia Lights',
            city: 'Rocky Mount',
            countryCode: 'US',
            postalCode: '67325',
            region: 'Kentucky',
            regionCode: 'MO',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '0d34c422-ec5d-46ea-86df-65f94cceaa11',
        legalName: 'Gottlieb Group LLC',
        metadata: [],
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-10-15T14:17:14.716Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisCompanyRequest](../../Models/Operations/PatchHrisCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisCompanyResponse](../../Models/Operations/PatchHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDeduction

Updates the HrisDeduction identified by `id`. Provide the unified HrisDeduction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDeduction" method="patch" path="/hris/{connection_id}/deduction/{id}" example="hris_deduction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: '73b21f5b-bf9b-4d41-9385-d1f848606abc',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-20T14:46:30.262Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-26T13:41:31.866Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisDeductionRequest](../../Models/Operations/PatchHrisDeductionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisDeductionResponse](../../Models/Operations/PatchHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDevice

Updates the HrisDevice identified by `id`. Provide the unified HrisDevice fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDevice" method="patch" path="/hris/{connection_id}/device/{id}" example="hris_device" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'fJNacaaoWi',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: true,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: false,
        id: 'a8512e1f-c183-4926-9052-af1b0dc82883',
        isMissing: false,
        manufacturer: 'Hackett Inc',
        metadata: [],
        model: 'Fantastic',
        name: 'august-laptop',
        os: 'transmitter',
        osVersion: '8.4.8',
        updatedAt: Utils\Utils::parseDateTime('2023-06-12T03:44:48.425Z'),
        version: '4.15.7',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchHrisDeviceRequest](../../Models/Operations/PatchHrisDeviceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchHrisDeviceResponse](../../Models/Operations/PatchHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDocument

Updates the HrisDocument identified by `id`. Provide the unified HrisDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDocument" method="patch" path="/hris/{connection_id}/document/{id}" example="hris_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: '800edda6-a617-47f2-b562-2866fe775022',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-16T18:03:54.226Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisDocumentRequest](../../Models/Operations/PatchHrisDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisDocumentResponse](../../Models/Operations/PatchHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisEarning

Updates the HrisEarning identified by `id`. Provide the unified HrisEarning fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisEarning" method="patch" path="/hris/{connection_id}/earning/{id}" example="hris_earning" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'USD',
        frequency: Shared\HrisEarningFrequency::Semimonthly,
        id: 'efb098aa-7f2a-4251-847f-441d540c46e1',
        metadata: [],
        notes: 'Deporto truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-28T15:13:35.316Z'),
        status: Shared\HrisEarningStatus::Ended,
        updatedAt: Utils\Utils::parseDateTime('2020-02-09T18:54:28.755Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisEarningRequest](../../Models/Operations/PatchHrisEarningRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisEarningResponse](../../Models/Operations/PatchHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisEmployee

Updates the HrisEmployee identified by `id`. Provide the unified HrisEmployee fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisEmployee" method="patch" path="/hris/{connection_id}/employee/{id}" example="hris_employee" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisEmployeeRequest(
    hrisEmployee: new Shared\HrisEmployee(
        address: new Shared\PropertyHrisEmployeeAddress(
            address1: '7431 Hintz Parkway',
            address2: 'Apt. 520',
            city: 'Port Rogerview',
            countryCode: 'US',
            postalCode: '01711',
            region: 'Missouri',
            regionCode: 'TN',
        ),
        bio: 'fun advocate  🇱🇻',
        compensation: [
            new Shared\HrisCompensation(
                amount: 95000,
                currency: 'USD',
                frequency: Shared\HrisCompensationFrequency::Year,
                notes: 'Eius.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'USD',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'zetta.prohaska@insidious-stump.net',
                type: Shared\HrisEmailType::Work,
            ),
        ],
        employeeNumber: 'uCk3qaL1ei',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::PartTime,
        firstName: 'Zetta',
        flsaStatus: Shared\FlsaStatus::Exempt,
        gender: Shared\HrisEmployeeGender::Male,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        id: '10cb6f42-495c-4da4-8f0e-f1bff4f6fca0',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\HrisEmployeeMaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: '91ec8f15-6b9c-43b8-bd81-15b2655c7619',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tutis',
            ),
        ],
        name: 'Zetta Prohaska',
        payFrequency: Shared\PayFrequency::Week,
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keith.prohaska@gmail.com',
                    ),
                ],
                name: 'Keith Prohaska',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keely.prohaska@icloud.com',
                    ),
                ],
                name: 'Keely Prohaska',
                type: Shared\HrisEmployeerelationshipType::Other,
            ),
        ],
        salutation: 'Ms.',
        ssnSin: '284-82-8167',
        storageQuotaAllocated: 3653713,
        storageQuotaAvailable: 3017275,
        storageQuotaUsed: 367449,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(320) 980-1370',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(694) 840-0166',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timeoffDaysTotal: 17,
        timeoffDaysUsed: 9,
        timezone: 'Europe/Ljubljana',
        title: 'District Branding Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T23:57:34.252Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisEmployee(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisGroup

Updates the HrisGroup identified by `id`. Provide the unified HrisGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisGroup" method="patch" path="/hris/{connection_id}/group/{id}" example="hris_group" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: '2615c77b-9294-4941-a8b0-b8a64d9cc4ba',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-27T22:59:44.354Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisJob

Updates the HrisJob identified by `id`. Provide the unified HrisJob fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisJob" method="patch" path="/hris/{connection_id}/job/{id}" example="hris_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '7a7f14d2-b07c-418f-8c88-08b3710ef0c5',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-01T20:18:30.525Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchHrisJobRequest](../../Models/Operations/PatchHrisJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchHrisJobResponse](../../Models/Operations/PatchHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisLocation

Updates the HrisLocation identified by `id`. Provide the unified HrisLocation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisLocation" method="patch" path="/hris/{connection_id}/location/{id}" example="hris_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisLocationRequest(
    hrisLocation: new Shared\HrisLocation(
        address: new Shared\PropertyHrisLocationAddress(
            address1: '4418 Daniella Mall',
            address2: 'Apt. 997',
            city: 'Burke',
            countryCode: 'US',
            postalCode: '54109',
            region: 'Ohio',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MNT',
        description: 'Commemoro acervus.',
        id: 'e06f715e-7773-498e-bd92-14086973e678',
        isActive: false,
        isHq: true,
        languageLocale: 'it',
        metadata: [],
        name: 'North Kimberlyland Office',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(371) 245-0699',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(700) 845-5854',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(461) 437-3548',
                type: Shared\HrisTelephoneType::Home,
            ),
        ],
        timezone: 'Asia/Jerusalem',
        updatedAt: Utils\Utils::parseDateTime('2023-06-23T15:32:06.331Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisLocation(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisLocationRequest](../../Models/Operations/PatchHrisLocationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisLocationResponse](../../Models/Operations/PatchHrisLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeoff

Updates the HrisTimeoff identified by `id`. Provide the unified HrisTimeoff fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeoff" method="patch" path="/hris/{connection_id}/timeoff/{id}" example="hris_timeoff" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.581Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.804Z'),
        id: 'efbaef78-67a2-4e3d-a881-870ef4fbb8d5',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.065Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.818Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisTimeoffRequest](../../Models/Operations/PatchHrisTimeoffRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisTimeoffResponse](../../Models/Operations/PatchHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeshift

Updates the HrisTimeshift identified by `id`. Provide the unified HrisTimeshift fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeshift" method="patch" path="/hris/{connection_id}/timeshift/{id}" example="hris_timeshift" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2022-07-20T23:26:01.173Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'GBP',
                frequency: Shared\HrisCompensationFrequency::Semimonthly,
                notes: 'Vehemens annus adficio.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-10-03T22:52:59.474Z'),
        hours: 6,
        id: '94c77994-2bc4-4160-b1ed-8629788eb2be',
        isApproved: false,
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-07-16T20:36:47.850Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T19:36:58.923Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->patchHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisTimeshiftRequest](../../Models/Operations/PatchHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisTimeshiftResponse](../../Models/Operations/PatchHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisAttendance

Deletes the HrisAttendance identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisAttendance" method="delete" path="/hris/{connection_id}/attendance/{id}" -->
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

$request = new Operations\RemoveHrisAttendanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisAttendance(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisAttendanceRequest](../../Models/Operations/RemoveHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisAttendanceResponse](../../Models/Operations/RemoveHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBankaccount

Deletes the HrisBankaccount identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBankaccount" method="delete" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\RemoveHrisBankaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisBankaccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveHrisBankaccountRequest](../../Models/Operations/RemoveHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveHrisBankaccountResponse](../../Models/Operations/RemoveHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBenefit

Deletes the HrisBenefit identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBenefit" method="delete" path="/hris/{connection_id}/benefit/{id}" -->
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

$request = new Operations\RemoveHrisBenefitRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisBenefit(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisBenefitRequest](../../Models/Operations/RemoveHrisBenefitRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisBenefitResponse](../../Models/Operations/RemoveHrisBenefitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisCompany

Deletes the HrisCompany identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisCompany" method="delete" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveHrisCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisCompanyRequest](../../Models/Operations/RemoveHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisCompanyResponse](../../Models/Operations/RemoveHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDeduction

Deletes the HrisDeduction identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDeduction" method="delete" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\RemoveHrisDeductionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisDeduction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisDeductionRequest](../../Models/Operations/RemoveHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisDeductionResponse](../../Models/Operations/RemoveHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDevice

Deletes the HrisDevice identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDevice" method="delete" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\RemoveHrisDeviceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisDevice(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveHrisDeviceRequest](../../Models/Operations/RemoveHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveHrisDeviceResponse](../../Models/Operations/RemoveHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDocument

Deletes the HrisDocument identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDocument" method="delete" path="/hris/{connection_id}/document/{id}" -->
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

$request = new Operations\RemoveHrisDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisDocument(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisDocumentRequest](../../Models/Operations/RemoveHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisDocumentResponse](../../Models/Operations/RemoveHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisEarning

Deletes the HrisEarning identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisEarning" method="delete" path="/hris/{connection_id}/earning/{id}" -->
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

$request = new Operations\RemoveHrisEarningRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisEarning(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisEarningRequest](../../Models/Operations/RemoveHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisEarningResponse](../../Models/Operations/RemoveHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisEmployee

Deletes the HrisEmployee identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisEmployee" method="delete" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\RemoveHrisEmployeeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisEmployee(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisGroup

Deletes the HrisGroup identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisGroup" method="delete" path="/hris/{connection_id}/group/{id}" -->
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

$request = new Operations\RemoveHrisGroupRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisGroup(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisJob

Deletes the HrisJob identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisJob" method="delete" path="/hris/{connection_id}/job/{id}" -->
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

$request = new Operations\RemoveHrisJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisJob(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveHrisJobRequest](../../Models/Operations/RemoveHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveHrisJobResponse](../../Models/Operations/RemoveHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisLocation

Deletes the HrisLocation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisLocation" method="delete" path="/hris/{connection_id}/location/{id}" -->
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

$request = new Operations\RemoveHrisLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisLocation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisLocationRequest](../../Models/Operations/RemoveHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisLocationResponse](../../Models/Operations/RemoveHrisLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeoff

Deletes the HrisTimeoff identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeoff" method="delete" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\RemoveHrisTimeoffRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisTimeoff(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisTimeoffRequest](../../Models/Operations/RemoveHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisTimeoffResponse](../../Models/Operations/RemoveHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeshift

Deletes the HrisTimeshift identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeshift" method="delete" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\RemoveHrisTimeshiftRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->removeHrisTimeshift(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisTimeshiftRequest](../../Models/Operations/RemoveHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisTimeshiftResponse](../../Models/Operations/RemoveHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisAttendance

Updates the HrisAttendance identified by `id`. Provide the unified HrisAttendance fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisAttendance" method="put" path="/hris/{connection_id}/attendance/{id}" example="hris_attendance" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T17:36:27.252Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-17T22:01:08.262Z'),
                id: '2d19ded7-1a97-4980-b07d-6d112e9b3a5e',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-01T22:20:06.324Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-26T22:36:24.443Z'),
        hourlyRate: 16,
        hours: 10,
        id: 'ed7541ff-3516-4104-846e-ba15003f7c02',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T09:02:53.272Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T11:20:09.085Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisAttendanceRequest](../../Models/Operations/UpdateHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisAttendanceResponse](../../Models/Operations/UpdateHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBankaccount

Updates the HrisBankaccount identified by `id`. Provide the unified HrisBankaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBankaccount" method="put" path="/hris/{connection_id}/bankaccount/{id}" example="hris_bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '457790c7-2059-4f68-a365-105161fa2112',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-06T21:50:16.605Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateHrisBankaccountRequest](../../Models/Operations/UpdateHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateHrisBankaccountResponse](../../Models/Operations/UpdateHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBenefit

Updates the HrisBenefit identified by `id`. Provide the unified HrisBenefit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBenefit" method="put" path="/hris/{connection_id}/benefit/{id}" example="hris_benefit" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisBenefitRequest(
    hrisBenefit: new Shared\HrisBenefit(
        coverageLevel: Shared\CoverageLevel::EmployeeSpouse,
        createdAt: Utils\Utils::parseDateTime('2020-06-11T01:24:05.654Z'),
        currency: 'GBP',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Month,
        id: 'd43ce78d-e29a-4efc-94e1-349c945ba757',
        isActive: false,
        metadata: [],
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Other,
        updatedAt: Utils\Utils::parseDateTime('2023-03-23T21:07:58.399Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisBenefit(
    request: $request
);

if ($response->hrisBenefit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisBenefitRequest](../../Models/Operations/UpdateHrisBenefitRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisBenefitResponse](../../Models/Operations/UpdateHrisBenefitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisCompany

Updates the HrisCompany identified by `id`. Provide the unified HrisCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisCompany" method="put" path="/hris/{connection_id}/company/{id}" example="hris_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisCompanyRequest(
    hrisCompany: new Shared\HrisCompany(
        address: new Shared\PropertyHrisCompanyAddress(
            address1: '675 Lavinia Lights',
            city: 'Rocky Mount',
            countryCode: 'US',
            postalCode: '67325',
            region: 'Kentucky',
            regionCode: 'MO',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '0d34c422-ec5d-46ea-86df-65f94cceaa11',
        legalName: 'Gottlieb Group LLC',
        metadata: [],
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-10-15T14:17:14.716Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisCompany(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisCompanyRequest](../../Models/Operations/UpdateHrisCompanyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisCompanyResponse](../../Models/Operations/UpdateHrisCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDeduction

Updates the HrisDeduction identified by `id`. Provide the unified HrisDeduction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDeduction" method="put" path="/hris/{connection_id}/deduction/{id}" example="hris_deduction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: '73b21f5b-bf9b-4d41-9385-d1f848606abc',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-20T14:46:30.262Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-26T13:41:31.866Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisDeductionRequest](../../Models/Operations/UpdateHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisDeductionResponse](../../Models/Operations/UpdateHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDevice

Updates the HrisDevice identified by `id`. Provide the unified HrisDevice fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDevice" method="put" path="/hris/{connection_id}/device/{id}" example="hris_device" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'fJNacaaoWi',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: true,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: false,
        id: 'a8512e1f-c183-4926-9052-af1b0dc82883',
        isMissing: false,
        manufacturer: 'Hackett Inc',
        metadata: [],
        model: 'Fantastic',
        name: 'august-laptop',
        os: 'transmitter',
        osVersion: '8.4.8',
        updatedAt: Utils\Utils::parseDateTime('2023-06-12T03:44:48.425Z'),
        version: '4.15.7',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateHrisDeviceRequest](../../Models/Operations/UpdateHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateHrisDeviceResponse](../../Models/Operations/UpdateHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDocument

Updates the HrisDocument identified by `id`. Provide the unified HrisDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDocument" method="put" path="/hris/{connection_id}/document/{id}" example="hris_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisDocumentRequest(
    hrisDocument: new Shared\HrisDocument(
        createdAt: Utils\Utils::parseDateTime('2022-10-27T11:47:26.086Z'),
        documentUrl: 'https://sore-decision.biz/',
        filename: 'ridge_forager.xsl',
        id: '800edda6-a617-47f2-b562-2866fe775022',
        metadata: [],
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-10-16T18:03:54.226Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisDocument(
    request: $request
);

if ($response->hrisDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisDocumentRequest](../../Models/Operations/UpdateHrisDocumentRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisDocumentResponse](../../Models/Operations/UpdateHrisDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisEarning

Updates the HrisEarning identified by `id`. Provide the unified HrisEarning fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisEarning" method="put" path="/hris/{connection_id}/earning/{id}" example="hris_earning" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'USD',
        frequency: Shared\HrisEarningFrequency::Semimonthly,
        id: 'efb098aa-7f2a-4251-847f-441d540c46e1',
        metadata: [],
        notes: 'Deporto truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-28T15:13:35.316Z'),
        status: Shared\HrisEarningStatus::Ended,
        updatedAt: Utils\Utils::parseDateTime('2020-02-09T18:54:28.755Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisEarningRequest](../../Models/Operations/UpdateHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisEarningResponse](../../Models/Operations/UpdateHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisEmployee

Updates the HrisEmployee identified by `id`. Provide the unified HrisEmployee fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisEmployee" method="put" path="/hris/{connection_id}/employee/{id}" example="hris_employee" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisEmployeeRequest(
    hrisEmployee: new Shared\HrisEmployee(
        address: new Shared\PropertyHrisEmployeeAddress(
            address1: '7431 Hintz Parkway',
            address2: 'Apt. 520',
            city: 'Port Rogerview',
            countryCode: 'US',
            postalCode: '01711',
            region: 'Missouri',
            regionCode: 'TN',
        ),
        bio: 'fun advocate  🇱🇻',
        compensation: [
            new Shared\HrisCompensation(
                amount: 95000,
                currency: 'USD',
                frequency: Shared\HrisCompensationFrequency::Year,
                notes: 'Eius.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'USD',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'zetta.prohaska@insidious-stump.net',
                type: Shared\HrisEmailType::Work,
            ),
        ],
        employeeNumber: 'uCk3qaL1ei',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::PartTime,
        firstName: 'Zetta',
        flsaStatus: Shared\FlsaStatus::Exempt,
        gender: Shared\HrisEmployeeGender::Male,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        id: '10cb6f42-495c-4da4-8f0e-f1bff4f6fca0',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\HrisEmployeeMaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: '91ec8f15-6b9c-43b8-bd81-15b2655c7619',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tutis',
            ),
        ],
        name: 'Zetta Prohaska',
        payFrequency: Shared\PayFrequency::Week,
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keith.prohaska@gmail.com',
                    ),
                ],
                name: 'Keith Prohaska',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'keely.prohaska@icloud.com',
                    ),
                ],
                name: 'Keely Prohaska',
                type: Shared\HrisEmployeerelationshipType::Other,
            ),
        ],
        salutation: 'Ms.',
        ssnSin: '284-82-8167',
        storageQuotaAllocated: 3653713,
        storageQuotaAvailable: 3017275,
        storageQuotaUsed: 367449,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(320) 980-1370',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(694) 840-0166',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timeoffDaysTotal: 17,
        timeoffDaysUsed: 9,
        timezone: 'Europe/Ljubljana',
        title: 'District Branding Specialist',
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T23:57:34.252Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisEmployee(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisGroup

Updates the HrisGroup identified by `id`. Provide the unified HrisGroup fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisGroup" method="put" path="/hris/{connection_id}/group/{id}" example="hris_group" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisGroupRequest(
    hrisGroup: new Shared\HrisGroup(
        createdAt: Utils\Utils::parseDateTime('2023-11-01T13:13:40.714Z'),
        description: 'Absorbeo casso.',
        id: '2615c77b-9294-4941-a8b0-b8a64d9cc4ba',
        isActive: false,
        metadata: [],
        name: 'Games',
        type: Shared\HrisGroupType::Branch,
        updatedAt: Utils\Utils::parseDateTime('2026-05-27T22:59:44.354Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisGroup(
    request: $request
);

if ($response->hrisGroup !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisJob

Updates the HrisJob identified by `id`. Provide the unified HrisJob fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisJob" method="put" path="/hris/{connection_id}/job/{id}" example="hris_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '7a7f14d2-b07c-418f-8c88-08b3710ef0c5',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-01T20:18:30.525Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateHrisJobRequest](../../Models/Operations/UpdateHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateHrisJobResponse](../../Models/Operations/UpdateHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisLocation

Updates the HrisLocation identified by `id`. Provide the unified HrisLocation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisLocation" method="put" path="/hris/{connection_id}/location/{id}" example="hris_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisLocationRequest(
    hrisLocation: new Shared\HrisLocation(
        address: new Shared\PropertyHrisLocationAddress(
            address1: '4418 Daniella Mall',
            address2: 'Apt. 997',
            city: 'Burke',
            countryCode: 'US',
            postalCode: '54109',
            region: 'Ohio',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MNT',
        description: 'Commemoro acervus.',
        id: 'e06f715e-7773-498e-bd92-14086973e678',
        isActive: false,
        isHq: true,
        languageLocale: 'it',
        metadata: [],
        name: 'North Kimberlyland Office',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(371) 245-0699',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(700) 845-5854',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(461) 437-3548',
                type: Shared\HrisTelephoneType::Home,
            ),
        ],
        timezone: 'Asia/Jerusalem',
        updatedAt: Utils\Utils::parseDateTime('2023-06-23T15:32:06.331Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisLocation(
    request: $request
);

if ($response->hrisLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisLocationRequest](../../Models/Operations/UpdateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisLocationResponse](../../Models/Operations/UpdateHrisLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeoff

Updates the HrisTimeoff identified by `id`. Provide the unified HrisTimeoff fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeoff" method="put" path="/hris/{connection_id}/timeoff/{id}" example="hris_timeoff" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.581Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.804Z'),
        id: 'efbaef78-67a2-4e3d-a881-870ef4fbb8d5',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.065Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.818Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisTimeoffRequest](../../Models/Operations/UpdateHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisTimeoffResponse](../../Models/Operations/UpdateHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeshift

Updates the HrisTimeshift identified by `id`. Provide the unified HrisTimeshift fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeshift" method="put" path="/hris/{connection_id}/timeshift/{id}" example="hris_timeshift" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2022-07-20T23:26:01.173Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'GBP',
                frequency: Shared\HrisCompensationFrequency::Semimonthly,
                notes: 'Vehemens annus adficio.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-10-03T22:52:59.474Z'),
        hours: 6,
        id: '94c77994-2bc4-4160-b1ed-8629788eb2be',
        isApproved: false,
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2023-07-16T20:36:47.850Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-03T19:36:58.923Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->hris->updateHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisTimeshiftRequest](../../Models/Operations/UpdateHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisTimeshiftResponse](../../Models/Operations/UpdateHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |