# Patient

## Overview

### Available Operations

* [createHealthcarePatient](#createhealthcarepatient) - Create a patient
* [getHealthcarePatient](#gethealthcarepatient) - Retrieve a patient
* [listHealthcarePatients](#listhealthcarepatients) - List all patients
* [patchHealthcarePatient](#patchhealthcarepatient) - Update a patient
* [updateHealthcarePatient](#updatehealthcarepatient) - Update a patient

## createHealthcarePatient

Create a patient

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
        birthdate: '2025-02-12',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '71bef0d8-2160-4fef-8b45-37b8a6bb244f',
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
        updatedAt: Utils\Utils::parseDateTime('2026-06-22T20:18:33.735Z'),
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

Retrieve a patient

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

List all patients

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

Update a patient

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
        birthdate: '2025-02-12',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '570149a1-cb28-49d2-861b-e9417dc279e4',
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
        updatedAt: Utils\Utils::parseDateTime('2026-06-22T20:18:33.752Z'),
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

Update a patient

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
        birthdate: '2025-02-12',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '570149a1-cb28-49d2-861b-e9417dc279e4',
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
        updatedAt: Utils\Utils::parseDateTime('2026-06-22T20:18:33.752Z'),
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