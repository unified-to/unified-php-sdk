# Appointment

## Overview

### Available Operations

* [createDmsAppointment](#createdmsappointment) - Create an appointment
* [createHealthcareAppointment](#createhealthcareappointment) - Create an appointment
* [getDmsAppointment](#getdmsappointment) - Retrieve an appointment
* [getHealthcareAppointment](#gethealthcareappointment) - Retrieve an appointment
* [listDmsAppointments](#listdmsappointments) - List all appointments
* [listHealthcareAppointments](#listhealthcareappointments) - List all appointments
* [patchDmsAppointment](#patchdmsappointment) - Update an appointment
* [patchHealthcareAppointment](#patchhealthcareappointment) - Update an appointment
* [removeDmsAppointment](#removedmsappointment) - Remove an appointment
* [removeHealthcareAppointment](#removehealthcareappointment) - Remove an appointment
* [updateDmsAppointment](#updatedmsappointment) - Update an appointment
* [updateHealthcareAppointment](#updatehealthcareappointment) - Update an appointment

## createDmsAppointment

Creates a DmsAppointment. Provide the unified DmsAppointment fields in the request body; they are mapped to the provider's API. Returns the created DmsAppointment.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsAppointment" method="post" path="/dms/{connection_id}/appointment" example="dms_appointment" -->
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

$request = new Operations\CreateDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.240Z'),
        id: 'd4359210-cd8e-4c2e-8c0a-c51986fc1efb',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '936a721d-9462-480d-86af-20d8ea5b0024',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: 'bc7e53e6-cc95-4762-a816-f0884c632258',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: 'ee0cd62a-bf4c-4a8b-986e-332c7627efa2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.240Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.516Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->appointment->createDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDmsAppointmentRequest](../../Models/Operations/CreateDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDmsAppointmentResponse](../../Models/Operations/CreateDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHealthcareAppointment

Creates a HealthcareAppointment. Provide the unified HealthcareAppointment fields in the request body; they are mapped to the provider's API. Returns the created HealthcareAppointment.

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
        description: 'cubicularis caput viriliter',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: '896de591-6d2a-4f3c-a604-f64005b57f00',
        isVirtual: true,
        meetingUrl: 'https://cautious-cannon.com/',
        metadata: [],
        notes: 'Casus anser ver alo beatus.',
        practitionerIds: [],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'New patient visit',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2026-10-27T09:09:41.379Z'),
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

## getDmsAppointment

Retrieves a single DmsAppointment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsAppointment" method="get" path="/dms/{connection_id}/appointment/{id}" -->
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

$request = new Operations\GetDmsAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->getDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetDmsAppointmentRequest](../../Models/Operations/GetDmsAppointmentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetDmsAppointmentResponse](../../Models/Operations/GetDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHealthcareAppointment

Retrieves a single HealthcareAppointment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

## listDmsAppointments

Returns a list of DmsAppointments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsAppointments" method="get" path="/dms/{connection_id}/appointment" -->
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

$request = new Operations\ListDmsAppointmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->appointment->listDmsAppointments(
    request: $request
);

if ($response->dmsAppointments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListDmsAppointmentsRequest](../../Models/Operations/ListDmsAppointmentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListDmsAppointmentsResponse](../../Models/Operations/ListDmsAppointmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHealthcareAppointments

Returns a list of HealthcareAppointments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

## patchDmsAppointment

Updates the DmsAppointment identified by `id`. Provide the unified DmsAppointment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsAppointment" method="patch" path="/dms/{connection_id}/appointment/{id}" example="dms_appointment" -->
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

$request = new Operations\PatchDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.261Z'),
        id: '9caa28b0-2115-41b7-8d9e-9daf8f712616',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '619b09b9-48c5-4084-abfd-1aebb20d26cc',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '18731930-1b83-479c-b674-cddaaa585ee2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '4a2119ad-6561-461a-a1e4-a06d8e73c153',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.261Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.528Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->patchDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchDmsAppointmentRequest](../../Models/Operations/PatchDmsAppointmentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchDmsAppointmentResponse](../../Models/Operations/PatchDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHealthcareAppointment

Updates the HealthcareAppointment identified by `id`. Provide the unified HealthcareAppointment fields to change in the request body.

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
        description: 'cubicularis caput viriliter',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: '59f21379-9e37-4354-bf07-0c404e9c281b',
        isVirtual: true,
        meetingUrl: 'https://cautious-cannon.com/',
        metadata: [],
        notes: 'Casus anser ver alo beatus.',
        practitionerIds: [],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'New patient visit',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2026-10-27T09:09:41.401Z'),
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

## removeDmsAppointment

Deletes the DmsAppointment identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDmsAppointment" method="delete" path="/dms/{connection_id}/appointment/{id}" -->
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

$request = new Operations\RemoveDmsAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->removeDmsAppointment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveDmsAppointmentRequest](../../Models/Operations/RemoveDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveDmsAppointmentResponse](../../Models/Operations/RemoveDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHealthcareAppointment

Deletes the HealthcareAppointment identified by `id`.

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

## updateDmsAppointment

Updates the DmsAppointment identified by `id`. Provide the unified DmsAppointment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsAppointment" method="put" path="/dms/{connection_id}/appointment/{id}" example="dms_appointment" -->
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

$request = new Operations\UpdateDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.261Z'),
        id: '9caa28b0-2115-41b7-8d9e-9daf8f712616',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '619b09b9-48c5-4084-abfd-1aebb20d26cc',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '18731930-1b83-479c-b674-cddaaa585ee2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '4a2119ad-6561-461a-a1e4-a06d8e73c153',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.261Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.528Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->appointment->updateDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateDmsAppointmentRequest](../../Models/Operations/UpdateDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateDmsAppointmentResponse](../../Models/Operations/UpdateDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHealthcareAppointment

Updates the HealthcareAppointment identified by `id`. Provide the unified HealthcareAppointment fields to change in the request body.

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
        description: 'cubicularis caput viriliter',
        endAt: Utils\Utils::parseDateTime('2023-12-12T13:04:41.451Z'),
        id: '59f21379-9e37-4354-bf07-0c404e9c281b',
        isVirtual: true,
        meetingUrl: 'https://cautious-cannon.com/',
        metadata: [],
        notes: 'Casus anser ver alo beatus.',
        practitionerIds: [],
        serviceTypes: [
            new Shared\HealthcareCode(
                code: '12762740',
                display: 'New patient visit',
                system: 'http://snomed.info/sct',
            ),
        ],
        slotIds: [],
        startAt: Utils\Utils::parseDateTime('2023-12-12T12:34:41.451Z'),
        status: Shared\HealthcareAppointmentStatus::Booked,
        updatedAt: Utils\Utils::parseDateTime('2026-10-27T09:09:41.401Z'),
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