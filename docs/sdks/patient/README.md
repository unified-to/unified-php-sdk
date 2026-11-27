# Patient

## Overview

### Available Operations

* [createHealthcarePatient](#createhealthcarepatient) - Create a patient
* [getFhirPatient](#getfhirpatient) - Read a Patient
* [getHealthcarePatient](#gethealthcarepatient) - Retrieve a patient
* [listFhirPatients](#listfhirpatients) - Search Patient resources
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
            address1: '3645 Leonardo Place',
            city: 'Estelleland',
            country: 'US',
            postalCode: '99263-6004',
            region: 'New Jersey',
        ),
        birthdate: '1941-12-26',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Ambrose Welch',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '323.524.3947 x89014',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'monroe.bauch@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Monroe',
        gender: Shared\HealthcarePatientGender::Female,
        id: 'b81cc3cc-4c2e-4ecc-8a00-c6c3539aab4e',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '51559512',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Bauch',
        metadata: [],
        name: 'Monroe Bauch',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-555-902-3082 x9590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-07-27T14:16:07.823Z'),
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

## getFhirPatient

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirPatient" method="get" path="/fhir/{connection_id}/Patient/{id}" -->
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

$request = new Operations\GetFhirPatientRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->patient->getFhirPatient(
    request: $request
);

if ($response->fhirPatient !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetFhirPatientRequest](../../Models/Operations/GetFhirPatientRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetFhirPatientResponse](../../Models/Operations/GetFhirPatientResponse.md)**

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

## listFhirPatients

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirPatients" method="get" path="/fhir/{connection_id}/Patient" -->
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

$request = new Operations\ListFhirPatientsRequest(
    connectionId: '<id>',
);

$response = $sdk->patient->listFhirPatients(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListFhirPatientsRequest](../../Models/Operations/ListFhirPatientsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListFhirPatientsResponse](../../Models/Operations/ListFhirPatientsResponse.md)**

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
            address1: '3645 Leonardo Place',
            city: 'Estelleland',
            country: 'US',
            postalCode: '99263-6004',
            region: 'New Jersey',
        ),
        birthdate: '1941-12-26',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Ambrose Welch',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '323.524.3947 x89014',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'monroe.bauch@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Monroe',
        gender: Shared\HealthcarePatientGender::Female,
        id: 'cdc030ea-0b5f-469b-a2b0-e7e2bed9fcbb',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '51559512',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Bauch',
        metadata: [],
        name: 'Monroe Bauch',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-555-902-3082 x9590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-07-27T14:16:07.852Z'),
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
            address1: '3645 Leonardo Place',
            city: 'Estelleland',
            country: 'US',
            postalCode: '99263-6004',
            region: 'New Jersey',
        ),
        birthdate: '1941-12-26',
        contacts: [
            new Shared\HealthcarePatientContact(
                emails: [],
                name: 'Ambrose Welch',
                relationship: 'Spouse',
                telephones: [
                    new Shared\HealthcareTelephone(
                        telephone: '323.524.3947 x89014',
                        type: Shared\HealthcareTelephoneType::Mobile,
                    ),
                ],
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-06-05T21:08:04.917Z'),
        emails: [
            new Shared\HealthcareEmail(
                email: 'monroe.bauch@icloud.com',
                type: Shared\HealthcareEmailType::Home,
            ),
        ],
        firstName: 'Monroe',
        gender: Shared\HealthcarePatientGender::Female,
        id: 'cdc030ea-0b5f-469b-a2b0-e7e2bed9fcbb',
        identifiers: [
            new Shared\HealthcareIdentifier(
                type: Shared\HealthcareIdentifierType::Mrn,
                value: '51559512',
            ),
        ],
        isActive: true,
        isDeceased: false,
        language: 'zh',
        lastName: 'Bauch',
        metadata: [],
        name: 'Monroe Bauch',
        practitionerIds: [],
        telephones: [
            new Shared\HealthcareTelephone(
                telephone: '1-555-902-3082 x9590',
                type: Shared\HealthcareTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2026-07-27T14:16:07.852Z'),
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