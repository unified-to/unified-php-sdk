# Observation

## Overview

### Available Operations

* [createHealthcareObservation](#createhealthcareobservation) - Create an observation
* [getHealthcareObservation](#gethealthcareobservation) - Retrieve an observation
* [listHealthcareObservations](#listhealthcareobservations) - List all observations

## createHealthcareObservation

Creates a HealthcareObservation. Provide the unified HealthcareObservation fields in the request body; they are mapped to the provider's API. Returns the created HealthcareObservation.

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
        id: '46529fdb-0e4c-43ef-b467-e0f76ca5e32e',
        interpretation: Shared\Interpretation::CriticalHigh,
        issuedAt: Utils\Utils::parseDateTime('2025-05-15T05:00:49.954Z'),
        metadata: [],
        name: 'Blood pressure panel',
        observedAt: Utils\Utils::parseDateTime('2025-01-23T11:09:56.398Z'),
        status: Shared\HealthcareObservationStatus::Corrected,
        type: Shared\HealthcareObservationType::VitalSigns,
        updatedAt: Utils\Utils::parseDateTime('2026-03-29T09:17:02.491Z'),
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

Retrieves a single HealthcareObservation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of HealthcareObservations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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