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
        hiredAt: Utils\Utils::parseDateTime('2023-05-10T16:14:24.235Z'),
        id: '0b47556b-dd67-4604-a3e7-3326e7ac2cc4',
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
                id: '8ff023c4-b1c3-4575-904d-5a28abce4f7c',
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
        updatedAt: Utils\Utils::parseDateTime('2022-02-19T07:01:46.451Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->employee->createHrisEmployee(
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

$response = $sdk->employee->getHrisEmployee(
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

$response = $sdk->employee->listHrisEmployees(
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
        hiredAt: Utils\Utils::parseDateTime('2023-05-10T16:14:24.268Z'),
        id: '5a45c156-b945-45a7-bdbb-7fcc013a456d',
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
                id: 'a06af6d2-ccab-4f6e-b714-1de7dc125067',
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
        updatedAt: Utils\Utils::parseDateTime('2022-02-19T07:01:46.473Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->patchHrisEmployee(
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

$response = $sdk->employee->removeHrisEmployee(
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
        hiredAt: Utils\Utils::parseDateTime('2023-05-10T16:14:24.268Z'),
        id: '5a45c156-b945-45a7-bdbb-7fcc013a456d',
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
                id: 'a06af6d2-ccab-4f6e-b714-1de7dc125067',
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
        updatedAt: Utils\Utils::parseDateTime('2022-02-19T07:01:46.473Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->updateHrisEmployee(
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