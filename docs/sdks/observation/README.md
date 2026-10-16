# Observation

## Overview

### Available Operations

* [createHealthcareObservation](#createhealthcareobservation) - Create an observation
* [getHealthcareObservation](#gethealthcareobservation) - Retrieve an observation
* [listHealthcareObservations](#listhealthcareobservations) - List all observations

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
        id: '86df3295-ea67-4365-8824-46aea5d9e8f8',
        interpretation: Shared\Interpretation::CriticalHigh,
        issuedAt: Utils\Utils::parseDateTime('2025-05-08T05:19:54.323Z'),
        metadata: [],
        name: 'Blood pressure panel',
        observedAt: Utils\Utils::parseDateTime('2025-01-17T08:31:46.152Z'),
        status: Shared\HealthcareObservationStatus::Corrected,
        type: Shared\HealthcareObservationType::VitalSigns,
        updatedAt: Utils\Utils::parseDateTime('2026-03-19T21:40:33.192Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->observation->createHealthcareObservation(
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

$response = $sdk->observation->getHealthcareObservation(
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

$response = $sdk->observation->listHealthcareObservations(
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