# Healthcare

## Overview

### Available Operations

* [createHealthcareAppointment](#createhealthcareappointment) - Create an appointment
* [createHealthcareObservation](#createhealthcareobservation) - Create an observation
* [createHealthcarePatient](#createhealthcarepatient) - Create a patient
* [getHealthcareAllergy](#gethealthcareallergy) - Retrieve an allergy
* [getHealthcareAppointment](#gethealthcareappointment) - Retrieve an appointment
* [getHealthcareCondition](#gethealthcarecondition) - Retrieve a condition
* [getHealthcareEncounter](#gethealthcareencounter) - Retrieve an encounter
* [getHealthcareImmunization](#gethealthcareimmunization) - Retrieve an immunization
* [getHealthcareLocation](#gethealthcarelocation) - Retrieve a location
* [getHealthcareMedication](#gethealthcaremedication) - Retrieve a medication
* [getHealthcareObservation](#gethealthcareobservation) - Retrieve an observation
* [getHealthcarePatient](#gethealthcarepatient) - Retrieve a patient
* [getHealthcarePractitioner](#gethealthcarepractitioner) - Retrieve a practitioner
* [getHealthcareSlot](#gethealthcareslot) - Retrieve a slot
* [listHealthcareAllergies](#listhealthcareallergies) - List all allergies
* [listHealthcareAppointments](#listhealthcareappointments) - List all appointments
* [listHealthcareConditions](#listhealthcareconditions) - List all conditions
* [listHealthcareEncounters](#listhealthcareencounters) - List all encounters
* [listHealthcareImmunizations](#listhealthcareimmunizations) - List all immunizations
* [listHealthcareLocations](#listhealthcarelocations) - List all locations
* [listHealthcareMedications](#listhealthcaremedications) - List all medications
* [listHealthcareObservations](#listhealthcareobservations) - List all observations
* [listHealthcarePatients](#listhealthcarepatients) - List all patients
* [listHealthcarePractitioners](#listhealthcarepractitioners) - List all practitioners
* [listHealthcareSlots](#listhealthcareslots) - List all slots
* [patchHealthcareAppointment](#patchhealthcareappointment) - Update an appointment
* [patchHealthcarePatient](#patchhealthcarepatient) - Update a patient
* [removeHealthcareAppointment](#removehealthcareappointment) - Remove an appointment
* [updateHealthcareAppointment](#updatehealthcareappointment) - Update an appointment
* [updateHealthcarePatient](#updatehealthcarepatient) - Update a patient

## createHealthcareAppointment

Create an appointment

### Example Usage

<!-- UsageSnippet language="php" operationID="createHealthcareAppointment" method="post" path="/healthcare/{connection_id}/appointment" example="healthcare_appointment" -->
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

$request = new Operations\CreateHealthcareAppointmentRequest(
    healthcareAppointment: new Shared\HealthcareAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-04-11T08:16:20.874Z'),
        description: 'clarus aptus cetera',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: '80283e88-4adf-4d13-9cc7-e68f0afc7fa4',
        metadata: [],
        practitionerIds: [],
        reasons: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'cubicularis caput',
                system: 'http://snomed.info/sct',
            ),
        ],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '61128108',
                display: 'Annual physical',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2025-11-16T12:15:44.981Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->healthcare->createHealthcareAppointment(
    request: $request
);

if ($response->healthcareAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateHealthcareAppointmentRequest](../../Models/Operations/CreateHealthcareAppointmentRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateHealthcareAppointmentResponse](../../Models/Operations/CreateHealthcareAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHealthcareObservation

Create an observation

### Example Usage

<!-- UsageSnippet language="php" operationID="createHealthcareObservation" method="post" path="/healthcare/{connection_id}/observation" example="healthcare_observation" -->
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

$request = new Operations\CreateHealthcareObservationRequest(
    healthcareObservation: new Shared\HealthcareObservation(
        codes: [
            new Shared\HealthcareCode(
                code: '85354-9',
                display: 'Blood pressure panel',
                system: 'http://loinc.org',
            ),
        ],
        components: [
            new Shared\HealthcareObservationComponent(
                codes: [
                    new Shared\HealthcareCode(
                        code: '8480-6',
                        system: 'http://loinc.org',
                    ),
                ],
                name: 'Systolic blood pressure',
                valueNumber: 103,
                valueUnit: 'mm[Hg]',
            ),
            new Shared\HealthcareObservationComponent(
                codes: [
                    new Shared\HealthcareCode(
                        code: '8462-4',
                        system: 'http://loinc.org',
                    ),
                ],
                name: 'Diastolic blood pressure',
                valueNumber: 60,
                valueUnit: 'mm[Hg]',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-12-06T21:34:04.293Z'),
        id: '2672acc5-bfff-4585-bd74-4135225cbeb8',
        interpretation: Shared\Interpretation::CriticalHigh,
        issuedAt: Utils\Utils::parseDateTime('2025-05-08T22:47:44.246Z'),
        metadata: [],
        name: 'Blood pressure panel',
        observedAt: Utils\Utils::parseDateTime('2025-01-17T23:48:05.212Z'),
        status: Shared\HealthcareObservationStatus::Corrected,
        type: Shared\HealthcareObservationType::VitalSigns,
        updatedAt: Utils\Utils::parseDateTime('2026-03-20T21:22:51.487Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->healthcare->createHealthcareObservation(
    request: $request
);

if ($response->healthcareObservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateHealthcareObservationRequest](../../Models/Operations/CreateHealthcareObservationRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateHealthcareObservationResponse](../../Models/Operations/CreateHealthcareObservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
            address1: '3645 Zoila Isle',
            address2: 'Suite 613',
            city: 'Jacintostead',
            country: 'US',
            postalCode: '31579',
            region: 'Minnesota',
        ),
        birthdate: '2025-02-08',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@yahoo.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '724739c0-6557-441e-a8e9-cc9f6059361e',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '92636004',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'en',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '659.223.0829 x590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-19T02:54:59.949Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->healthcare->createHealthcarePatient(
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

## getHealthcareAllergy

Retrieve an allergy

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareAllergy" method="get" path="/healthcare/{connection_id}/allergy/{id}" -->
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

$request = new Operations\GetHealthcareAllergyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareAllergy(
    request: $request
);

if ($response->healthcareAllergy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetHealthcareAllergyRequest](../../Models/Operations/GetHealthcareAllergyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetHealthcareAllergyResponse](../../Models/Operations/GetHealthcareAllergyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareAppointment

Retrieve an appointment

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareAppointment" method="get" path="/healthcare/{connection_id}/appointment/{id}" -->
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

$request = new Operations\GetHealthcareAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareAppointment(
    request: $request
);

if ($response->healthcareAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetHealthcareAppointmentRequest](../../Models/Operations/GetHealthcareAppointmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetHealthcareAppointmentResponse](../../Models/Operations/GetHealthcareAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareCondition

Retrieve a condition

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareCondition" method="get" path="/healthcare/{connection_id}/condition/{id}" -->
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

$request = new Operations\GetHealthcareConditionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareCondition(
    request: $request
);

if ($response->healthcareCondition !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetHealthcareConditionRequest](../../Models/Operations/GetHealthcareConditionRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetHealthcareConditionResponse](../../Models/Operations/GetHealthcareConditionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareEncounter

Retrieve an encounter

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareEncounter" method="get" path="/healthcare/{connection_id}/encounter/{id}" -->
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

$request = new Operations\GetHealthcareEncounterRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareEncounter(
    request: $request
);

if ($response->healthcareEncounter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetHealthcareEncounterRequest](../../Models/Operations/GetHealthcareEncounterRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetHealthcareEncounterResponse](../../Models/Operations/GetHealthcareEncounterResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareImmunization

Retrieve an immunization

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareImmunization" method="get" path="/healthcare/{connection_id}/immunization/{id}" -->
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

$request = new Operations\GetHealthcareImmunizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareImmunization(
    request: $request
);

if ($response->healthcareImmunization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetHealthcareImmunizationRequest](../../Models/Operations/GetHealthcareImmunizationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetHealthcareImmunizationResponse](../../Models/Operations/GetHealthcareImmunizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareLocation

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareLocation" method="get" path="/healthcare/{connection_id}/location/{id}" -->
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

$request = new Operations\GetHealthcareLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareLocation(
    request: $request
);

if ($response->healthcareLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetHealthcareLocationRequest](../../Models/Operations/GetHealthcareLocationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetHealthcareLocationResponse](../../Models/Operations/GetHealthcareLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareMedication

Retrieve a medication

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareMedication" method="get" path="/healthcare/{connection_id}/medication/{id}" -->
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

$request = new Operations\GetHealthcareMedicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareMedication(
    request: $request
);

if ($response->healthcareMedication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetHealthcareMedicationRequest](../../Models/Operations/GetHealthcareMedicationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetHealthcareMedicationResponse](../../Models/Operations/GetHealthcareMedicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareObservation

Retrieve an observation

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareObservation" method="get" path="/healthcare/{connection_id}/observation/{id}" -->
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

$request = new Operations\GetHealthcareObservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareObservation(
    request: $request
);

if ($response->healthcareObservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetHealthcareObservationRequest](../../Models/Operations/GetHealthcareObservationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetHealthcareObservationResponse](../../Models/Operations/GetHealthcareObservationResponse.md)**

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

$response = $sdk->healthcare->getHealthcarePatient(
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

## getHealthcarePractitioner

Retrieve a practitioner

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcarePractitioner" method="get" path="/healthcare/{connection_id}/practitioner/{id}" -->
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

$request = new Operations\GetHealthcarePractitionerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcarePractitioner(
    request: $request
);

if ($response->healthcarePractitioner !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetHealthcarePractitionerRequest](../../Models/Operations/GetHealthcarePractitionerRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetHealthcarePractitionerResponse](../../Models/Operations/GetHealthcarePractitionerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareSlot

Retrieve a slot

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareSlot" method="get" path="/healthcare/{connection_id}/slot/{id}" -->
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

$request = new Operations\GetHealthcareSlotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->getHealthcareSlot(
    request: $request
);

if ($response->healthcareSlot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHealthcareSlotRequest](../../Models/Operations/GetHealthcareSlotRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHealthcareSlotResponse](../../Models/Operations/GetHealthcareSlotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareAllergies

List all allergies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareAllergies" method="get" path="/healthcare/{connection_id}/allergy" -->
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

$request = new Operations\ListHealthcareAllergiesRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareAllergies(
    request: $request
);

if ($response->healthcareAllergies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListHealthcareAllergiesRequest](../../Models/Operations/ListHealthcareAllergiesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListHealthcareAllergiesResponse](../../Models/Operations/ListHealthcareAllergiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareAppointments

List all appointments

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareAppointments" method="get" path="/healthcare/{connection_id}/appointment" -->
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

$request = new Operations\ListHealthcareAppointmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareAppointments(
    request: $request
);

if ($response->healthcareAppointments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListHealthcareAppointmentsRequest](../../Models/Operations/ListHealthcareAppointmentsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListHealthcareAppointmentsResponse](../../Models/Operations/ListHealthcareAppointmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareConditions

List all conditions

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareConditions" method="get" path="/healthcare/{connection_id}/condition" -->
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

$request = new Operations\ListHealthcareConditionsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareConditions(
    request: $request
);

if ($response->healthcareConditions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListHealthcareConditionsRequest](../../Models/Operations/ListHealthcareConditionsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListHealthcareConditionsResponse](../../Models/Operations/ListHealthcareConditionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareEncounters

List all encounters

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareEncounters" method="get" path="/healthcare/{connection_id}/encounter" -->
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

$request = new Operations\ListHealthcareEncountersRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareEncounters(
    request: $request
);

if ($response->healthcareEncounters !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListHealthcareEncountersRequest](../../Models/Operations/ListHealthcareEncountersRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListHealthcareEncountersResponse](../../Models/Operations/ListHealthcareEncountersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareImmunizations

List all immunizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareImmunizations" method="get" path="/healthcare/{connection_id}/immunization" -->
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

$request = new Operations\ListHealthcareImmunizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareImmunizations(
    request: $request
);

if ($response->healthcareImmunizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListHealthcareImmunizationsRequest](../../Models/Operations/ListHealthcareImmunizationsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListHealthcareImmunizationsResponse](../../Models/Operations/ListHealthcareImmunizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareLocations

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareLocations" method="get" path="/healthcare/{connection_id}/location" -->
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

$request = new Operations\ListHealthcareLocationsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareLocations(
    request: $request
);

if ($response->healthcareLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListHealthcareLocationsRequest](../../Models/Operations/ListHealthcareLocationsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListHealthcareLocationsResponse](../../Models/Operations/ListHealthcareLocationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareMedications

List all medications

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareMedications" method="get" path="/healthcare/{connection_id}/medication" -->
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

$request = new Operations\ListHealthcareMedicationsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareMedications(
    request: $request
);

if ($response->healthcareMedications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListHealthcareMedicationsRequest](../../Models/Operations/ListHealthcareMedicationsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListHealthcareMedicationsResponse](../../Models/Operations/ListHealthcareMedicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareObservations

List all observations

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareObservations" method="get" path="/healthcare/{connection_id}/observation" -->
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

$request = new Operations\ListHealthcareObservationsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareObservations(
    request: $request
);

if ($response->healthcareObservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListHealthcareObservationsRequest](../../Models/Operations/ListHealthcareObservationsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListHealthcareObservationsResponse](../../Models/Operations/ListHealthcareObservationsResponse.md)**

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

$response = $sdk->healthcare->listHealthcarePatients(
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

## listHealthcarePractitioners

List all practitioners

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcarePractitioners" method="get" path="/healthcare/{connection_id}/practitioner" -->
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

$request = new Operations\ListHealthcarePractitionersRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcarePractitioners(
    request: $request
);

if ($response->healthcarePractitioners !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListHealthcarePractitionersRequest](../../Models/Operations/ListHealthcarePractitionersRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListHealthcarePractitionersResponse](../../Models/Operations/ListHealthcarePractitionersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareSlots

List all slots

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareSlots" method="get" path="/healthcare/{connection_id}/slot" -->
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

$request = new Operations\ListHealthcareSlotsRequest(
    connectionId: '<id>',
);

$response = $sdk->healthcare->listHealthcareSlots(
    request: $request
);

if ($response->healthcareSlots !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHealthcareSlotsRequest](../../Models/Operations/ListHealthcareSlotsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHealthcareSlotsResponse](../../Models/Operations/ListHealthcareSlotsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHealthcareAppointment

Update an appointment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHealthcareAppointment" method="patch" path="/healthcare/{connection_id}/appointment/{id}" example="healthcare_appointment" -->
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

$request = new Operations\PatchHealthcareAppointmentRequest(
    healthcareAppointment: new Shared\HealthcareAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-04-11T08:16:20.874Z'),
        description: 'clarus aptus cetera',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: 'c5cd8642-f828-472e-8257-965f821179eb',
        metadata: [],
        practitionerIds: [],
        reasons: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'cubicularis caput',
                system: 'http://snomed.info/sct',
            ),
        ],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '61128108',
                display: 'Annual physical',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2025-11-16T12:15:44.994Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->patchHealthcareAppointment(
    request: $request
);

if ($response->healthcareAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchHealthcareAppointmentRequest](../../Models/Operations/PatchHealthcareAppointmentRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchHealthcareAppointmentResponse](../../Models/Operations/PatchHealthcareAppointmentResponse.md)**

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
            address1: '3645 Zoila Isle',
            address2: 'Suite 613',
            city: 'Jacintostead',
            country: 'US',
            postalCode: '31579',
            region: 'Minnesota',
        ),
        birthdate: '2025-02-08',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@yahoo.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '4af3957a-7e88-42ea-bf4c-33b3aa5510e7',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '92636004',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'en',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '659.223.0829 x590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-19T02:54:59.975Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->patchHealthcarePatient(
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

## removeHealthcareAppointment

Remove an appointment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHealthcareAppointment" method="delete" path="/healthcare/{connection_id}/appointment/{id}" -->
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

$request = new Operations\RemoveHealthcareAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->removeHealthcareAppointment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveHealthcareAppointmentRequest](../../Models/Operations/RemoveHealthcareAppointmentRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveHealthcareAppointmentResponse](../../Models/Operations/RemoveHealthcareAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHealthcareAppointment

Update an appointment

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHealthcareAppointment" method="put" path="/healthcare/{connection_id}/appointment/{id}" example="healthcare_appointment" -->
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

$request = new Operations\UpdateHealthcareAppointmentRequest(
    healthcareAppointment: new Shared\HealthcareAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-04-11T08:16:20.874Z'),
        description: 'clarus aptus cetera',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: 'c5cd8642-f828-472e-8257-965f821179eb',
        metadata: [],
        practitionerIds: [],
        reasons: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'cubicularis caput',
                system: 'http://snomed.info/sct',
            ),
        ],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '61128108',
                display: 'Annual physical',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2025-11-16T12:15:44.994Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->updateHealthcareAppointment(
    request: $request
);

if ($response->healthcareAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateHealthcareAppointmentRequest](../../Models/Operations/UpdateHealthcareAppointmentRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateHealthcareAppointmentResponse](../../Models/Operations/UpdateHealthcareAppointmentResponse.md)**

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
            address1: '3645 Zoila Isle',
            address2: 'Suite 613',
            city: 'Jacintostead',
            country: 'US',
            postalCode: '31579',
            region: 'Minnesota',
        ),
        birthdate: '2025-02-08',
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'alejandrin.parker@yahoo.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Alejandrin',
        gender: Shared\HealthcarePatientGender::Female,
        id: '4af3957a-7e88-42ea-bf4c-33b3aa5510e7',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '92636004',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'en',
        lastName: 'Parker',
        metadata: [],
        name: 'Alejandrin Parker',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '659.223.0829 x590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-06-19T02:54:59.975Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->healthcare->updateHealthcarePatient(
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