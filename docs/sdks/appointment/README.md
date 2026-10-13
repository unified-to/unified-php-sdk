# Appointment

## Overview

### Available Operations

* [createHealthcareAppointment](#createhealthcareappointment) - Create an appointment
* [getHealthcareAppointment](#gethealthcareappointment) - Retrieve an appointment
* [listHealthcareAppointments](#listhealthcareappointments) - List all appointments
* [patchHealthcareAppointment](#patchhealthcareappointment) - Update an appointment
* [removeHealthcareAppointment](#removehealthcareappointment) - Remove an appointment
* [updateHealthcareAppointment](#updatehealthcareappointment) - Update an appointment

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
        id: '319c02d2-9fec-41de-ac5a-6f95fb536ab1',
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-13T06:49:40.328Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->appointment->createHealthcareAppointment(
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

$response = $sdk->appointment->getHealthcareAppointment(
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

$response = $sdk->appointment->listHealthcareAppointments(
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
        id: '6614f1b2-3579-43be-a26c-174f690276a4',
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-13T06:49:40.346Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->patchHealthcareAppointment(
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

$response = $sdk->appointment->removeHealthcareAppointment(
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
        id: '6614f1b2-3579-43be-a26c-174f690276a4',
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-13T06:49:40.346Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->updateHealthcareAppointment(
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