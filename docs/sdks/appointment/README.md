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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.615Z'),
        id: '1b456ff4-9390-432b-9ddb-78e3258abd67',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '40facd1e-0348-4601-9c24-a85e4c8520e1',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '8e8f484d-e32b-4fac-ab76-8d05a34e9111',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: 'c2846550-52fc-4fdc-ba1c-5abd09aed119',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.615Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.851Z'),
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
        id: '63e959ba-b608-4cc7-a6b5-a7c031a722d8',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-28T10:01:33.377Z'),
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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.628Z'),
        id: 'f22f6e1c-ecdc-49a3-b817-fd7ac42e2375',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '433a256e-1d9f-4146-ab55-47a18b57a352',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '217a3464-9c90-45bb-aa2e-2b5fbd5c81c4',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '0d9f55db-24ca-4190-9238-06849eafdc76',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.628Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.858Z'),
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
        id: '2735d151-28d7-4d7e-93f8-c3766d305657',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-28T10:01:33.391Z'),
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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.628Z'),
        id: 'f22f6e1c-ecdc-49a3-b817-fd7ac42e2375',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '433a256e-1d9f-4146-ab55-47a18b57a352',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '217a3464-9c90-45bb-aa2e-2b5fbd5c81c4',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '0d9f55db-24ca-4190-9238-06849eafdc76',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.628Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.858Z'),
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
        id: '2735d151-28d7-4d7e-93f8-c3766d305657',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-28T10:01:33.391Z'),
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