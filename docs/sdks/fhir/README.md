# Fhir

## Overview

### Available Operations

* [getFhirAllergyintolerance](#getfhirallergyintolerance) - Read a AllergyIntolerance
* [getFhirCondition](#getfhircondition) - Read a Condition
* [getFhirDiagnosticreport](#getfhirdiagnosticreport) - Read a DiagnosticReport
* [getFhirEncounter](#getfhirencounter) - Read a Encounter
* [getFhirImmunization](#getfhirimmunization) - Read a Immunization
* [getFhirMedicationrequest](#getfhirmedicationrequest) - Read a MedicationRequest
* [getFhirObservation](#getfhirobservation) - Read a Observation
* [getFhirPatient](#getfhirpatient) - Read a Patient
* [getFhirPractitioner](#getfhirpractitioner) - Read a Practitioner
* [listFhirAllergyintolerances](#listfhirallergyintolerances) - Search AllergyIntolerance resources
* [listFhirConditions](#listfhirconditions) - Search Condition resources
* [listFhirDiagnosticreports](#listfhirdiagnosticreports) - Search DiagnosticReport resources
* [listFhirEncounters](#listfhirencounters) - Search Encounter resources
* [listFhirImmunizations](#listfhirimmunizations) - Search Immunization resources
* [listFhirMedicationrequests](#listfhirmedicationrequests) - Search MedicationRequest resources
* [listFhirMetadatas](#listfhirmetadatas) - Get the CapabilityStatement
* [listFhirObservations](#listfhirobservations) - Search Observation resources
* [listFhirPatients](#listfhirpatients) - Search Patient resources
* [listFhirPractitioners](#listfhirpractitioners) - Search Practitioner resources

## getFhirAllergyintolerance

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirAllergyintolerance" method="get" path="/fhir/{connection_id}/AllergyIntolerance/{id}" -->
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

$request = new Operations\GetFhirAllergyintoleranceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirAllergyintolerance(
    request: $request
);

if ($response->fhirAllergyIntolerance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetFhirAllergyintoleranceRequest](../../Models/Operations/GetFhirAllergyintoleranceRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetFhirAllergyintoleranceResponse](../../Models/Operations/GetFhirAllergyintoleranceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirCondition

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirCondition" method="get" path="/fhir/{connection_id}/Condition/{id}" -->
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

$request = new Operations\GetFhirConditionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirCondition(
    request: $request
);

if ($response->fhirCondition !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetFhirConditionRequest](../../Models/Operations/GetFhirConditionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetFhirConditionResponse](../../Models/Operations/GetFhirConditionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirDiagnosticreport

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirDiagnosticreport" method="get" path="/fhir/{connection_id}/DiagnosticReport/{id}" -->
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

$request = new Operations\GetFhirDiagnosticreportRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirDiagnosticreport(
    request: $request
);

if ($response->fhirDiagnosticReport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetFhirDiagnosticreportRequest](../../Models/Operations/GetFhirDiagnosticreportRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetFhirDiagnosticreportResponse](../../Models/Operations/GetFhirDiagnosticreportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirEncounter

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirEncounter" method="get" path="/fhir/{connection_id}/Encounter/{id}" -->
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

$request = new Operations\GetFhirEncounterRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirEncounter(
    request: $request
);

if ($response->fhirEncounter !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetFhirEncounterRequest](../../Models/Operations/GetFhirEncounterRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetFhirEncounterResponse](../../Models/Operations/GetFhirEncounterResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirImmunization

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirImmunization" method="get" path="/fhir/{connection_id}/Immunization/{id}" -->
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

$request = new Operations\GetFhirImmunizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirImmunization(
    request: $request
);

if ($response->fhirImmunization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetFhirImmunizationRequest](../../Models/Operations/GetFhirImmunizationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetFhirImmunizationResponse](../../Models/Operations/GetFhirImmunizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirMedicationrequest

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirMedicationrequest" method="get" path="/fhir/{connection_id}/MedicationRequest/{id}" -->
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

$request = new Operations\GetFhirMedicationrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirMedicationrequest(
    request: $request
);

if ($response->fhirMedicationRequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetFhirMedicationrequestRequest](../../Models/Operations/GetFhirMedicationrequestRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetFhirMedicationrequestResponse](../../Models/Operations/GetFhirMedicationrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getFhirObservation

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirObservation" method="get" path="/fhir/{connection_id}/Observation/{id}" -->
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

$request = new Operations\GetFhirObservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirObservation(
    request: $request
);

if ($response->fhirObservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetFhirObservationRequest](../../Models/Operations/GetFhirObservationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetFhirObservationResponse](../../Models/Operations/GetFhirObservationResponse.md)**

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

$response = $sdk->fhir->getFhirPatient(
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

## getFhirPractitioner

Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="getFhirPractitioner" method="get" path="/fhir/{connection_id}/Practitioner/{id}" -->
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

$request = new Operations\GetFhirPractitionerRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->fhir->getFhirPractitioner(
    request: $request
);

if ($response->fhirPractitioner !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetFhirPractitionerRequest](../../Models/Operations/GetFhirPractitionerRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetFhirPractitionerResponse](../../Models/Operations/GetFhirPractitionerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirAllergyintolerances

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirAllergyintolerances" method="get" path="/fhir/{connection_id}/AllergyIntolerance" -->
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

$request = new Operations\ListFhirAllergyintolerancesRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirAllergyintolerances(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListFhirAllergyintolerancesRequest](../../Models/Operations/ListFhirAllergyintolerancesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListFhirAllergyintolerancesResponse](../../Models/Operations/ListFhirAllergyintolerancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirConditions

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirConditions" method="get" path="/fhir/{connection_id}/Condition" -->
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

$request = new Operations\ListFhirConditionsRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirConditions(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListFhirConditionsRequest](../../Models/Operations/ListFhirConditionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListFhirConditionsResponse](../../Models/Operations/ListFhirConditionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirDiagnosticreports

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirDiagnosticreports" method="get" path="/fhir/{connection_id}/DiagnosticReport" -->
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

$request = new Operations\ListFhirDiagnosticreportsRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirDiagnosticreports(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListFhirDiagnosticreportsRequest](../../Models/Operations/ListFhirDiagnosticreportsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListFhirDiagnosticreportsResponse](../../Models/Operations/ListFhirDiagnosticreportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirEncounters

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirEncounters" method="get" path="/fhir/{connection_id}/Encounter" -->
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

$request = new Operations\ListFhirEncountersRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirEncounters(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListFhirEncountersRequest](../../Models/Operations/ListFhirEncountersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListFhirEncountersResponse](../../Models/Operations/ListFhirEncountersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirImmunizations

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirImmunizations" method="get" path="/fhir/{connection_id}/Immunization" -->
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

$request = new Operations\ListFhirImmunizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirImmunizations(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListFhirImmunizationsRequest](../../Models/Operations/ListFhirImmunizationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListFhirImmunizationsResponse](../../Models/Operations/ListFhirImmunizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirMedicationrequests

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirMedicationrequests" method="get" path="/fhir/{connection_id}/MedicationRequest" -->
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

$request = new Operations\ListFhirMedicationrequestsRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirMedicationrequests(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListFhirMedicationrequestsRequest](../../Models/Operations/ListFhirMedicationrequestsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListFhirMedicationrequestsResponse](../../Models/Operations/ListFhirMedicationrequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirMetadatas

The resources, interactions and search parameters this connection's integration supports. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirMetadatas" method="get" path="/fhir/{connection_id}/metadata" -->
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

$request = new Operations\ListFhirMetadatasRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirMetadatas(
    request: $request
);

if ($response->fhirCapabilityStatement !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListFhirMetadatasRequest](../../Models/Operations/ListFhirMetadatasRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListFhirMetadatasResponse](../../Models/Operations/ListFhirMetadatasResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listFhirObservations

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirObservations" method="get" path="/fhir/{connection_id}/Observation" -->
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

$request = new Operations\ListFhirObservationsRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirObservations(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListFhirObservationsRequest](../../Models/Operations/ListFhirObservationsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListFhirObservationsResponse](../../Models/Operations/ListFhirObservationsResponse.md)**

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

$response = $sdk->fhir->listFhirPatients(
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

## listFhirPractitioners

Returns a searchset Bundle; follow its next link for more pages. Responses use the application/fhir+json media type; errors are OperationOutcome resources. Read-only (FHIR R4 4.0.1).

### Example Usage

<!-- UsageSnippet language="php" operationID="listFhirPractitioners" method="get" path="/fhir/{connection_id}/Practitioner" -->
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

$request = new Operations\ListFhirPractitionersRequest(
    connectionId: '<id>',
);

$response = $sdk->fhir->listFhirPractitioners(
    request: $request
);

if ($response->fhirBundle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListFhirPractitionersRequest](../../Models/Operations/ListFhirPractitionersRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListFhirPractitionersResponse](../../Models/Operations/ListFhirPractitionersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |