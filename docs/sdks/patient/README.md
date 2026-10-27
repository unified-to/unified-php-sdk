# Patient

## Overview

### Available Operations

* [createHealthcarePatient](#createhealthcarepatient) - Create a patient
* [getHealthcarePatient](#gethealthcarepatient) - Retrieve a patient
* [listHealthcarePatients](#listhealthcarepatients) - List all patients
* [patchHealthcarePatient](#patchhealthcarepatient) - Update a patient
* [updateHealthcarePatient](#updatehealthcarepatient) - Update a patient

## createHealthcarePatient

Creates a HealthcarePatient. Provide the unified HealthcarePatient fields in the request body; they are mapped to the provider's API. Returns the created HealthcarePatient.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHealthcarePatient" method="post" path="/healthcare/{connection_id}/patient" example="healthcare_patient" -->
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

$request = new Operations\CreateHealthcarePatientRequest(
    healthcarePatient: new Shared\HealthcarePatient(
        address: new Shared\PropertyHealthcarePatientAddress(
            address1: '162 Kirlin Mall',
            city: 'Dickinsonborough',
            country: 'US',
            postalCode: '54031',
            region: 'Nebraska',
        ),
        birthdate: '2025-02-18',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Antonia Lebsack',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '(695) 328-7029 x4412',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: 'e533cd23-333d-4ad4-9ef6-389d1df623a1',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '57992636',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-219-555-9023 x08295',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-28T11:51:39.371Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->patient->createHealthcarePatient(
    request: $request
);

if ($response->healthcarePatient !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateHealthcarePatientRequest](../../Models/Operations/CreateHealthcarePatientRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateHealthcarePatientResponse](../../Models/Operations/CreateHealthcarePatientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcarePatient

Retrieves a single HealthcarePatient by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcarePatient" method="get" path="/healthcare/{connection_id}/patient/{id}" -->
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

$request = new Operations\GetHealthcarePatientRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->patient->getHealthcarePatient(
    request: $request
);

if ($response->healthcarePatient !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetHealthcarePatientRequest](../../Models/Operations/GetHealthcarePatientRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetHealthcarePatientResponse](../../Models/Operations/GetHealthcarePatientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcarePatients

Returns a list of HealthcarePatients. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcarePatients" method="get" path="/healthcare/{connection_id}/patient" -->
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

$request = new Operations\ListHealthcarePatientsRequest(
    connectionId: '<id>',
);

$response = $sdk->patient->listHealthcarePatients(
    request: $request
);

if ($response->healthcarePatients !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListHealthcarePatientsRequest](../../Models/Operations/ListHealthcarePatientsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListHealthcarePatientsResponse](../../Models/Operations/ListHealthcarePatientsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHealthcarePatient

Updates the HealthcarePatient identified by `id`. Provide the unified HealthcarePatient fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHealthcarePatient" method="patch" path="/healthcare/{connection_id}/patient/{id}" example="healthcare_patient" -->
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

$request = new Operations\PatchHealthcarePatientRequest(
    healthcarePatient: new Shared\HealthcarePatient(
        address: new Shared\PropertyHealthcarePatientAddress(
            address1: '162 Kirlin Mall',
            city: 'Dickinsonborough',
            country: 'US',
            postalCode: '54031',
            region: 'Nebraska',
        ),
        birthdate: '2025-02-18',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Antonia Lebsack',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '(695) 328-7029 x4412',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '0e0d1090-2202-4a0b-9176-b082d4850435',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '57992636',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-219-555-9023 x08295',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-28T11:51:39.404Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->patient->patchHealthcarePatient(
    request: $request
);

if ($response->healthcarePatient !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchHealthcarePatientRequest](../../Models/Operations/PatchHealthcarePatientRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchHealthcarePatientResponse](../../Models/Operations/PatchHealthcarePatientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHealthcarePatient

Updates the HealthcarePatient identified by `id`. Provide the unified HealthcarePatient fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHealthcarePatient" method="put" path="/healthcare/{connection_id}/patient/{id}" example="healthcare_patient" -->
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

$request = new Operations\UpdateHealthcarePatientRequest(
    healthcarePatient: new Shared\HealthcarePatient(
        address: new Shared\PropertyHealthcarePatientAddress(
            address1: '162 Kirlin Mall',
            city: 'Dickinsonborough',
            country: 'US',
            postalCode: '54031',
            region: 'Nebraska',
        ),
        birthdate: '2025-02-18',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Antonia Lebsack',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '(695) 328-7029 x4412',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '0e0d1090-2202-4a0b-9176-b082d4850435',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '57992636',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-219-555-9023 x08295',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-28T11:51:39.404Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->patient->updateHealthcarePatient(
    request: $request
);

if ($response->healthcarePatient !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateHealthcarePatientRequest](../../Models/Operations/UpdateHealthcarePatientRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateHealthcarePatientResponse](../../Models/Operations/UpdateHealthcarePatientResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |