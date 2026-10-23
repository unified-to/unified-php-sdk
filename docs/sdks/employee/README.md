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
        id: 'f6a1ee89-b952-43f1-8024-95d665d0bdc5',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: '554bb5dd-d05f-4c0e-85ca-7aa28f3f1d32',
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
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T09:51:06.439Z'),
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
        id: 'cc9adbc7-7e36-4c95-9f64-626deec56178',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'c37f78a9-26c3-499d-8136-291077fe7813',
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
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T09:51:06.453Z'),
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
        id: 'cc9adbc7-7e36-4c95-9f64-626deec56178',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/85.jpg',
        languageLocale: 'in',
        lastName: 'Prohaska',
        locations: [],
        maritalStatus: Shared\MaritalStatus::Married,
        metadata: [
            new Shared\HrisMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\HrisMetadataFormat::Text,
                id: 'c37f78a9-26c3-499d-8136-291077fe7813',
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
        updatedAt: Utils\Utils::parseDateTime('2020-07-19T09:51:06.453Z'),
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