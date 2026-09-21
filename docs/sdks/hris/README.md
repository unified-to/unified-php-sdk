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
* [createHrisEmployee](#createhrisemployee) - Create an employee
* [createHrisGroup](#createhrisgroup) - Create a group
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
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [getHrisLocation](#gethrislocation) - Retrieve a location
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
* [listHrisEmployees](#listhrisemployees) - List all employees
* [listHrisGroups](#listhrisgroups) - List all groups
* [listHrisLocations](#listhrislocations) - List all locations
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
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [patchHrisGroup](#patchhrisgroup) - Update a group
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
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [removeHrisGroup](#removehrisgroup) - Remove a group
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
* [updateHrisEmployee](#updatehrisemployee) - Update an employee
* [updateHrisGroup](#updatehrisgroup) - Update a group
* [updateHrisLocation](#updatehrislocation) - Update a location
* [updateHrisTimeoff](#updatehristimeoff) - Update a timeoff
* [updateHrisTimeshift](#updatehristimeshift) - Update a timeshift

## createHrisAttendance

Create an attendance

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
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.680Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.478Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.145Z'),
        hourlyRate: 53,
        hours: 10,
        id: '4dc42a25-5423-40c7-8e9f-7a6ee2825a9d',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.651Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.539Z'),
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

Create a bankaccount

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
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        id: 'c82c9187-bf76-4b65-bf02-79054582a285',
        isPrimary: false,
        name: 'Checking Account',
        routingNumber: '448650724',
        updatedAt: Utils\Utils::parseDateTime('2025-06-06T18:00:27.146Z'),
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

Create a benefit

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
        currency: 'JOD',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Hour,
        id: 'b395db38-c261-454e-9bfe-9466e617f2ee',
        isActive: false,
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Garnishment,
        updatedAt: Utils\Utils::parseDateTime('2023-03-07T16:17:00.575Z'),
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

Create a company

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
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '06e7e4d7-17be-4700-8e1d-0a3f524df53c',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T15:55:10.653Z'),
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

Create a deduction

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
        amount: 139655,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeOnly,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-25T14:43:59.509Z'),
        frequency: Shared\HrisDeductionFrequency::Month,
        id: 'c829711a-715d-455b-bb4d-00ee88c2deb9',
        isActive: false,
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-02-20T07:45:12.827Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-03T17:00:24.883Z'),
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

Create a device

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
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: 'e592d58c-449d-47c3-b4f2-cc9f41866826',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-22T14:06:09.513Z'),
        version: '2.20.17',
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

Create a document

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
        id: 'c36ce7b1-e96d-4546-8310-2b1cd2427e9f',
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-09-19T03:46:30.170Z'),
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

## createHrisEmployee

Create an employee

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
            address1: '52008 Lansdowne Road',
            address2: 'Apt. 101',
            city: 'Connellyberg',
            countryCode: 'US',
            postalCode: '18978',
            region: 'South Dakota',
            regionCode: 'NM',
        ),
        bio: 'sushi devotee, singer',
        compensation: [
            new Shared\HrisCompensation(
                amount: 69148,
                currency: 'CRC',
                frequency: Shared\HrisCompensationFrequency::Quarter,
                notes: 'Tergeo laborum laboriosam tutis.',
                type: Shared\HrisCompensationType::Equity,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'IDR',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'Zetta_Prohaska67@hotmail.com',
                type: Shared\HrisEmailType::Home,
            ),
        ],
        employeeNumber: 'YuOt169CGu',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::Volunteer,
        firstName: 'Zetta',
        gender: Shared\HrisEmployeeGender::Intersex,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2023-05-12T03:12:11.486Z'),
        id: '38a79fa8-80b1-4659-b0a6-327121c773f1',
        imageUrl: 'https://loremflickr.com/3684/2116?lock=4686991638584456',
        languageLocale: 'es',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'f5bf964b-886a-4dd4-bc29-e4151986a960',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tenetur',
            ),
        ],
        name: 'Zetta Prohaska',
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Deshaun.Sanford24@yahoo.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Rebeca.Dibbert11@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Hester80@gmail.com',
                    ),
                ],
                name: 'Automotive',
                type: Shared\HrisEmployeerelationshipType::Emergency,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Benedict_Wisozk83@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Princess_Rath43@gmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Elmira92@yahoo.com',
                    ),
                ],
                name: 'Music',
                type: Shared\HrisEmployeerelationshipType::Friend,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Jane30@gmail.com',
                    ),
                ],
                name: 'Jewelry',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
        ],
        salutation: 'Miss',
        ssnSin: 'yMRtj0Q3xO',
        storageQuotaAllocated: 3674489,
        storageQuotaAvailable: 7748057,
        storageQuotaUsed: 301727,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(409) 801-3705',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        terminationReason: 'Communis adnuo damnatio atavus terebro acies canis cogito triumphus creber temptatio defendo cubo amissio paulatim corroboro.',
        timeoffDaysTotal: 12,
        timeoffDaysUsed: 6,
        timezone: 'Africa/Harare',
        title: 'Investor Paradigm Liaison',
        updatedAt: Utils\Utils::parseDateTime('2022-02-20T06:18:08.630Z'),
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

Create a group

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
        id: '5536364b-d302-4a73-96c0-7b59633aa9a4',
        isActive: false,
        name: 'Games',
        type: Shared\HrisGroupType::BusinessUnit,
        updatedAt: Utils\Utils::parseDateTime('2026-04-26T00:08:53.897Z'),
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

## createHrisLocation

Create a location

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
            address1: '2743 Connelly Summit',
            address2: 'Apt. 350',
            city: 'Titusville',
            countryCode: 'US',
            postalCode: '16154-1095',
            region: 'Oregon',
            regionCode: 'AL',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MUR',
        description: 'Acervus caries.',
        externalIdentifier: 'a4b2700b-1f32-461e-bdb2-b452e0c5c022',
        id: 'babcc944-d428-43aa-902f-1d0ca3e00057',
        isActive: true,
        isHq: false,
        languageLocale: 'fr',
        name: 'adhuc',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(710) 550-6997',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(208) 555-8542',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(712) 473-5482',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timezone: 'America/Guyana',
        updatedAt: Utils\Utils::parseDateTime('2023-06-10T01:13:57.534Z'),
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

Create a taxonomy

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
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Apto demonstro audacia adstringo cursim tristis solio careo.',
        domain: 'Electronics',
        id: 'ede085db-5709-4d53-a490-746f3de5be17',
        isActive: false,
        name: 'International Functionality Architect',
        parentId: '6524b2a7-6520-4e15-8c4e-1aa6793db837',
        roleIds: [
            '2b1ef757-eb4c-4207-8af1-929afe49cd65',
        ],
        subcategory: 'Bamboo',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-05-22T19:24:30.042Z'),
        url: 'https://our-polarisation.name',
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

Create a timeoff

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
        approvedAt: Utils\Utils::parseDateTime('2022-02-21T02:08:20.330Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-09T08:52:11.281Z'),
        id: '3766cf5c-9dcb-4419-9212-a74a979cf1ee',
        isPaid: true,
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-08-24T08:25:05.389Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-08T05:45:54.437Z'),
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

Create a timeshift

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
        approvedAt: Utils\Utils::parseDateTime('2023-06-07T03:05:14.680Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Hour,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-08-28T03:01:07.094Z'),
        hours: 8,
        id: '9f128688-46cc-481b-a41e-503d0c962370',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-06-26T08:32:27.006Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-06-23T15:17:01.677Z'),
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

Retrieve an attendance

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

Retrieve a bankaccount

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

Retrieve a benefit

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

Retrieve a company

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

Retrieve a deduction

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

Retrieve a device

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

Retrieve a document

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

## getHrisEmployee

Retrieve an employee

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

Retrieve a group

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

## getHrisLocation

Retrieve a location

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

## getHrisPayslip

Retrieve a payslip

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

Retrieve a taxonomy

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

Retrieve a timeoff

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

Retrieve a timeshift

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

List all attendances

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

List all bankaccounts

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

List all benefits

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

List all companies

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

List all deductions

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

List all devices

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

List all documents

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

## listHrisEmployees

List all employees

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

List all groups

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

## listHrisLocations

List all locations

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

## listHrisPayslips

List all payslips

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

List all taxonomies

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

List all timeoffs

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

List all timeshifts

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

Update an attendance

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
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.691Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.489Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.159Z'),
        hourlyRate: 53,
        hours: 10,
        id: '6a4550f7-d438-4b96-af25-c8104c25caf9',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.653Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.542Z'),
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

Update a bankaccount

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
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        id: '6005b494-a4b0-4602-8c37-94e7048e00e8',
        isPrimary: false,
        name: 'Checking Account',
        routingNumber: '448650724',
        updatedAt: Utils\Utils::parseDateTime('2025-06-06T18:00:27.158Z'),
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

Update a benefit

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
        currency: 'JOD',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Hour,
        id: '03fe3c3a-0a32-4f47-af0e-f9e4092754de',
        isActive: false,
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Garnishment,
        updatedAt: Utils\Utils::parseDateTime('2023-03-07T16:17:00.582Z'),
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

Update a company

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
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '85a95ea9-94dd-4928-a69f-aaef5373741a',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T15:55:10.670Z'),
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

Update a deduction

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
        amount: 139655,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeOnly,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-25T14:43:59.520Z'),
        frequency: Shared\HrisDeductionFrequency::Month,
        id: 'a126ff04-6413-411e-932d-9a25af613ff0',
        isActive: false,
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-02-20T07:45:12.836Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-03T17:00:24.891Z'),
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

Update a device

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
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: '52148932-32c0-49fe-bd1f-9a5c66b73d70',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-22T14:06:09.520Z'),
        version: '2.20.17',
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

Update a document

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
        id: '23391a53-5d85-4874-b27c-6cc01144df3c',
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-09-19T03:46:30.178Z'),
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

## patchHrisEmployee

Update an employee

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
            address1: '52008 Lansdowne Road',
            address2: 'Apt. 101',
            city: 'Connellyberg',
            countryCode: 'US',
            postalCode: '18978',
            region: 'South Dakota',
            regionCode: 'NM',
        ),
        bio: 'sushi devotee, singer',
        compensation: [
            new Shared\HrisCompensation(
                amount: 69148,
                currency: 'CRC',
                frequency: Shared\HrisCompensationFrequency::Quarter,
                notes: 'Tergeo laborum laboriosam tutis.',
                type: Shared\HrisCompensationType::Equity,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'IDR',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'Zetta_Prohaska67@hotmail.com',
                type: Shared\HrisEmailType::Home,
            ),
        ],
        employeeNumber: 'YuOt169CGu',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::Volunteer,
        firstName: 'Zetta',
        gender: Shared\HrisEmployeeGender::Intersex,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2023-05-12T03:12:11.541Z'),
        id: '58337faa-4e32-4102-b7c8-c1d452691dbf',
        imageUrl: 'https://loremflickr.com/3684/2116?lock=4686991638584456',
        languageLocale: 'es',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'dc9e304c-74a8-4e11-aa99-780c6ad1af40',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tenetur',
            ),
        ],
        name: 'Zetta Prohaska',
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Deshaun.Sanford24@yahoo.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Rebeca.Dibbert11@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Hester80@gmail.com',
                    ),
                ],
                name: 'Automotive',
                type: Shared\HrisEmployeerelationshipType::Emergency,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Benedict_Wisozk83@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Princess_Rath43@gmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Elmira92@yahoo.com',
                    ),
                ],
                name: 'Music',
                type: Shared\HrisEmployeerelationshipType::Friend,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Jane30@gmail.com',
                    ),
                ],
                name: 'Jewelry',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
        ],
        salutation: 'Miss',
        ssnSin: 'yMRtj0Q3xO',
        storageQuotaAllocated: 3674489,
        storageQuotaAvailable: 7748057,
        storageQuotaUsed: 301727,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(409) 801-3705',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        terminationReason: 'Communis adnuo damnatio atavus terebro acies canis cogito triumphus creber temptatio defendo cubo amissio paulatim corroboro.',
        timeoffDaysTotal: 12,
        timeoffDaysUsed: 6,
        timezone: 'Africa/Harare',
        title: 'Investor Paradigm Liaison',
        updatedAt: Utils\Utils::parseDateTime('2022-02-20T06:18:08.666Z'),
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

Update a group

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
        id: '3d2f3a6f-a93f-4944-9979-441dfe433fe9',
        isActive: false,
        name: 'Games',
        type: Shared\HrisGroupType::BusinessUnit,
        updatedAt: Utils\Utils::parseDateTime('2026-04-26T00:08:53.907Z'),
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

## patchHrisLocation

Update a location

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
            address1: '2743 Connelly Summit',
            address2: 'Apt. 350',
            city: 'Titusville',
            countryCode: 'US',
            postalCode: '16154-1095',
            region: 'Oregon',
            regionCode: 'AL',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MUR',
        description: 'Acervus caries.',
        externalIdentifier: '996e7b27-7913-4e41-b567-67ebb6db77ef',
        id: '8aada89e-1868-4e4d-9fcc-6e895a06d15d',
        isActive: true,
        isHq: false,
        languageLocale: 'fr',
        name: 'adhuc',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(710) 550-6997',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(208) 555-8542',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(712) 473-5482',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timezone: 'America/Guyana',
        updatedAt: Utils\Utils::parseDateTime('2023-06-10T01:13:57.540Z'),
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

Update a timeoff

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
        approvedAt: Utils\Utils::parseDateTime('2022-02-21T02:08:20.331Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-09T08:52:11.290Z'),
        id: '1b90647f-5bb3-4551-b5f1-77cbcbbc655e',
        isPaid: true,
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-08-24T08:25:05.395Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-08T05:45:54.439Z'),
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

Update a timeshift

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
        approvedAt: Utils\Utils::parseDateTime('2023-06-07T03:05:14.688Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Hour,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-08-28T03:01:07.109Z'),
        hours: 8,
        id: '2492c6df-e2c6-450f-af6d-7db5a8f448c0',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-06-26T08:32:27.015Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-06-23T15:17:01.681Z'),
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

Remove an attendance

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

Remove a bankaccount

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

Remove a benefit

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

Remove a company

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

Remove a deduction

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

Remove a device

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

Remove a document

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

## removeHrisEmployee

Remove an employee

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

Remove a group

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

## removeHrisLocation

Remove a location

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

Remove a timeoff

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

Remove a timeshift

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

Update an attendance

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
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.691Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.489Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.159Z'),
        hourlyRate: 53,
        hours: 10,
        id: '6a4550f7-d438-4b96-af25-c8104c25caf9',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.653Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.542Z'),
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

Update a bankaccount

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
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        id: '6005b494-a4b0-4602-8c37-94e7048e00e8',
        isPrimary: false,
        name: 'Checking Account',
        routingNumber: '448650724',
        updatedAt: Utils\Utils::parseDateTime('2025-06-06T18:00:27.158Z'),
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

Update a benefit

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
        currency: 'JOD',
        description: 'Vomito voluptas dolor sed.',
        employerContributionAmount: 185006,
        employerContributionMaxAmount: 179093,
        employerContributionType: Shared\EmployerContributionType::Percentage,
        frequency: Shared\HrisBenefitFrequency::Hour,
        id: '03fe3c3a-0a32-4f47-af0e-f9e4092754de',
        isActive: false,
        name: 'Frozen Wooden Ball',
        tax: Shared\Tax::PreTax,
        type: Shared\HrisBenefitType::Garnishment,
        updatedAt: Utils\Utils::parseDateTime('2023-03-07T16:17:00.582Z'),
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

Update a company

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
            address1: '2549 Church Walk',
            city: 'Lake Nettiebury',
            countryCode: 'US',
            postalCode: '32877-4898',
            region: 'Idaho',
            regionCode: 'PA',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-05-02T22:27:38.970Z'),
        id: '85a95ea9-94dd-4928-a69f-aaef5373741a',
        legalName: 'Schultz LLC',
        name: 'Gottlieb Group',
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T15:55:10.670Z'),
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

Update a deduction

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
        amount: 139655,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeOnly,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-25T14:43:59.520Z'),
        frequency: Shared\HrisDeductionFrequency::Month,
        id: 'a126ff04-6413-411e-932d-9a25af613ff0',
        isActive: false,
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-02-20T07:45:12.836Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-03T17:00:24.891Z'),
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

Update a device

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
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: '52148932-32c0-49fe-bd1f-9a5c66b73d70',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-22T14:06:09.520Z'),
        version: '2.20.17',
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

Update a document

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
        id: '23391a53-5d85-4874-b27c-6cc01144df3c',
        type: Shared\HrisDocumentType::Policy,
        updatedAt: Utils\Utils::parseDateTime('2025-09-19T03:46:30.178Z'),
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

## updateHrisEmployee

Update an employee

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
            address1: '52008 Lansdowne Road',
            address2: 'Apt. 101',
            city: 'Connellyberg',
            countryCode: 'US',
            postalCode: '18978',
            region: 'South Dakota',
            regionCode: 'NM',
        ),
        bio: 'sushi devotee, singer',
        compensation: [
            new Shared\HrisCompensation(
                amount: 69148,
                currency: 'CRC',
                frequency: Shared\HrisCompensationFrequency::Quarter,
                notes: 'Tergeo laborum laboriosam tutis.',
                type: Shared\HrisCompensationType::Equity,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-09-16T15:08:53.262Z'),
        currency: 'IDR',
        dateOfBirth: Utils\Utils::parseDateTime('2001-04-22'),
        emails: [
            new Shared\HrisEmail(
                email: 'Zetta_Prohaska67@hotmail.com',
                type: Shared\HrisEmailType::Home,
            ),
        ],
        employeeNumber: 'YuOt169CGu',
        employmentStatus: Shared\EmploymentStatus::Active,
        employmentType: Shared\HrisEmployeeEmploymentType::Volunteer,
        firstName: 'Zetta',
        gender: Shared\HrisEmployeeGender::Intersex,
        hasMfa: true,
        hiredAt: Utils\Utils::parseDateTime('2023-05-12T03:12:11.541Z'),
        id: '58337faa-4e32-4102-b7c8-c1d452691dbf',
        imageUrl: 'https://loremflickr.com/3684/2116?lock=4686991638584456',
        languageLocale: 'es',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'dc9e304c-74a8-4e11-aa99-780c6ad1af40',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'tenetur',
            ),
        ],
        name: 'Zetta Prohaska',
        pronouns: 'she/her',
        relationships: [
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Deshaun.Sanford24@yahoo.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Rebeca.Dibbert11@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Hester80@gmail.com',
                    ),
                ],
                name: 'Automotive',
                type: Shared\HrisEmployeerelationshipType::Emergency,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Benedict_Wisozk83@hotmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Princess_Rath43@gmail.com',
                    ),
                    new Shared\HrisEmail(
                        email: 'Elmira92@yahoo.com',
                    ),
                ],
                name: 'Music',
                type: Shared\HrisEmployeerelationshipType::Friend,
            ),
            new Shared\HrisEmployeerelationship(
                emails: [
                    new Shared\HrisEmail(
                        email: 'Jane30@gmail.com',
                    ),
                ],
                name: 'Jewelry',
                type: Shared\HrisEmployeerelationshipType::Sibling,
            ),
        ],
        salutation: 'Miss',
        ssnSin: 'yMRtj0Q3xO',
        storageQuotaAllocated: 3674489,
        storageQuotaAvailable: 7748057,
        storageQuotaUsed: 301727,
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(409) 801-3705',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        terminationReason: 'Communis adnuo damnatio atavus terebro acies canis cogito triumphus creber temptatio defendo cubo amissio paulatim corroboro.',
        timeoffDaysTotal: 12,
        timeoffDaysUsed: 6,
        timezone: 'Africa/Harare',
        title: 'Investor Paradigm Liaison',
        updatedAt: Utils\Utils::parseDateTime('2022-02-20T06:18:08.666Z'),
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

Update a group

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
        id: '3d2f3a6f-a93f-4944-9979-441dfe433fe9',
        isActive: false,
        name: 'Games',
        type: Shared\HrisGroupType::BusinessUnit,
        updatedAt: Utils\Utils::parseDateTime('2026-04-26T00:08:53.907Z'),
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

## updateHrisLocation

Update a location

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
            address1: '2743 Connelly Summit',
            address2: 'Apt. 350',
            city: 'Titusville',
            countryCode: 'US',
            postalCode: '16154-1095',
            region: 'Oregon',
            regionCode: 'AL',
        ),
        createdAt: Utils\Utils::parseDateTime('2021-07-18T10:32:01.414Z'),
        currency: 'MUR',
        description: 'Acervus caries.',
        externalIdentifier: '996e7b27-7913-4e41-b567-67ebb6db77ef',
        id: '8aada89e-1868-4e4d-9fcc-6e895a06d15d',
        isActive: true,
        isHq: false,
        languageLocale: 'fr',
        name: 'adhuc',
        telephones: [
            new Shared\HrisTelephone(
                telephone: '(710) 550-6997',
                type: Shared\HrisTelephoneType::Fax,
            ),
            new Shared\HrisTelephone(
                telephone: '(208) 555-8542',
                type: Shared\HrisTelephoneType::Home,
            ),
            new Shared\HrisTelephone(
                telephone: '(712) 473-5482',
                type: Shared\HrisTelephoneType::Fax,
            ),
        ],
        timezone: 'America/Guyana',
        updatedAt: Utils\Utils::parseDateTime('2023-06-10T01:13:57.540Z'),
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

Update a timeoff

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
        approvedAt: Utils\Utils::parseDateTime('2022-02-21T02:08:20.331Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-09T08:52:11.290Z'),
        id: '1b90647f-5bb3-4551-b5f1-77cbcbbc655e',
        isPaid: true,
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-08-24T08:25:05.395Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-08T05:45:54.439Z'),
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

Update a timeshift

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
        approvedAt: Utils\Utils::parseDateTime('2023-06-07T03:05:14.688Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Hour,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-08-28T03:01:07.109Z'),
        hours: 8,
        id: '2492c6df-e2c6-450f-af6d-7db5a8f448c0',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-06-26T08:32:27.015Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-06-23T15:17:01.681Z'),
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