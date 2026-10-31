# Reservation

## Overview

### Available Operations

* [createCommerceReservation](#createcommercereservation) - Create a reservation
* [createPropertyReservation](#createpropertyreservation) - Create a reservation
* [getCommerceReservation](#getcommercereservation) - Retrieve a reservation
* [getPropertyReservation](#getpropertyreservation) - Retrieve a reservation
* [listCommerceReservations](#listcommercereservations) - List all reservations
* [listPropertyReservations](#listpropertyreservations) - List all reservations
* [patchCommerceReservation](#patchcommercereservation) - Update a reservation
* [patchPropertyReservation](#patchpropertyreservation) - Update a reservation
* [removeCommerceReservation](#removecommercereservation) - Remove a reservation
* [updateCommerceReservation](#updatecommercereservation) - Update a reservation
* [updatePropertyReservation](#updatepropertyreservation) - Update a reservation

## createCommerceReservation

Creates a CommerceReservation. Provide the unified CommerceReservation fields in the request body; they are mapped to the provider's API. Returns the created CommerceReservation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReservation" method="post" path="/commerce/{connection_id}/reservation" example="commerce_reservation" -->
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

$request = new Operations\CreateCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: 'cbe1bd31-8bb3-4063-b09f-e5dbbb56752d',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-06T01:02:11.777Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->reservation->createCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateCommerceReservationRequest](../../Models/Operations/CreateCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateCommerceReservationResponse](../../Models/Operations/CreateCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPropertyReservation

Creates a PropertyReservation. Provide the unified PropertyReservation fields in the request body; they are mapped to the provider's API. Returns the created PropertyReservation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyReservation" method="post" path="/property/{connection_id}/reservation" example="property_reservation" -->
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

$request = new Operations\CreatePropertyReservationRequest(
    propertyReservation: new Shared\PropertyReservation(
        adults: 4,
        balanceAmount: 2181.6,
        children: 2,
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: '0b9d6772-8758-4f31-906b-a2230f568348',
        lineItems: [
            new Shared\PropertyLineitem(
                amount: 1980,
                description: '11 nights',
                isMandatory: true,
                name: 'Accommodation',
                type: Shared\PropertyLineitemType::Base,
            ),
            new Shared\PropertyLineitem(
                amount: 162,
                isMandatory: true,
                name: 'Cleaning fee',
                type: Shared\PropertyLineitemType::Fee,
            ),
            new Shared\PropertyLineitem(
                amount: 237.6,
                isMandatory: true,
                name: 'Lodging tax',
                type: Shared\PropertyLineitemType::Tax,
            ),
            new Shared\PropertyLineitem(
                amount: -198,
                isMandatory: false,
                name: 'Weekly discount',
                type: Shared\PropertyLineitemType::Discount,
            ),
        ],
        metadata: [],
        nights: 11,
        notes: 'Conculco volaticus vis volva quas trepide vae earum temptatio tertius.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T12:57:10.258Z'),
        webUrl: 'https://antique-tennis.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->reservation->createPropertyReservation(
    request: $request
);

if ($response->propertyReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreatePropertyReservationRequest](../../Models/Operations/CreatePropertyReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreatePropertyReservationResponse](../../Models/Operations/CreatePropertyReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReservation

Retrieves a single CommerceReservation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReservation" method="get" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\GetCommerceReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->getCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetCommerceReservationRequest](../../Models/Operations/GetCommerceReservationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetCommerceReservationResponse](../../Models/Operations/GetCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyReservation

Retrieves a single PropertyReservation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyReservation" method="get" path="/property/{connection_id}/reservation/{id}" -->
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

$request = new Operations\GetPropertyReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->getPropertyReservation(
    request: $request
);

if ($response->propertyReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetPropertyReservationRequest](../../Models/Operations/GetPropertyReservationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetPropertyReservationResponse](../../Models/Operations/GetPropertyReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReservations

Returns a list of CommerceReservations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReservations" method="get" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\ListCommerceReservationsRequest(
    connectionId: '<id>',
);

$response = $sdk->reservation->listCommerceReservations(
    request: $request
);

if ($response->commerceReservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceReservationsRequest](../../Models/Operations/ListCommerceReservationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceReservationsResponse](../../Models/Operations/ListCommerceReservationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyReservations

Returns a list of PropertyReservations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyReservations" method="get" path="/property/{connection_id}/reservation" -->
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

$request = new Operations\ListPropertyReservationsRequest(
    connectionId: '<id>',
);

$response = $sdk->reservation->listPropertyReservations(
    request: $request
);

if ($response->propertyReservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListPropertyReservationsRequest](../../Models/Operations/ListPropertyReservationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListPropertyReservationsResponse](../../Models/Operations/ListPropertyReservationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReservation

Updates the CommerceReservation identified by `id`. Provide the unified CommerceReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReservation" method="patch" path="/commerce/{connection_id}/reservation/{id}" example="commerce_reservation" -->
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

$request = new Operations\PatchCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: '9e2646b3-43f6-4737-9d77-052f2b5e4ee0',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-06T01:02:11.781Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->patchCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchCommerceReservationRequest](../../Models/Operations/PatchCommerceReservationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchCommerceReservationResponse](../../Models/Operations/PatchCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPropertyReservation

Updates the PropertyReservation identified by `id`. Provide the unified PropertyReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPropertyReservation" method="patch" path="/property/{connection_id}/reservation/{id}" example="property_reservation" -->
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

$request = new Operations\PatchPropertyReservationRequest(
    propertyReservation: new Shared\PropertyReservation(
        adults: 4,
        balanceAmount: 2181.6,
        children: 2,
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: 'f7dac597-b970-450e-9da0-d5386dbe9c76',
        lineItems: [
            new Shared\PropertyLineitem(
                amount: 1980,
                description: '11 nights',
                isMandatory: true,
                name: 'Accommodation',
                type: Shared\PropertyLineitemType::Base,
            ),
            new Shared\PropertyLineitem(
                amount: 162,
                isMandatory: true,
                name: 'Cleaning fee',
                type: Shared\PropertyLineitemType::Fee,
            ),
            new Shared\PropertyLineitem(
                amount: 237.6,
                isMandatory: true,
                name: 'Lodging tax',
                type: Shared\PropertyLineitemType::Tax,
            ),
            new Shared\PropertyLineitem(
                amount: -198,
                isMandatory: false,
                name: 'Weekly discount',
                type: Shared\PropertyLineitemType::Discount,
            ),
        ],
        metadata: [],
        nights: 11,
        notes: 'Conculco volaticus vis volva quas trepide vae earum temptatio tertius.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T12:57:10.261Z'),
        webUrl: 'https://antique-tennis.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->patchPropertyReservation(
    request: $request
);

if ($response->propertyReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchPropertyReservationRequest](../../Models/Operations/PatchPropertyReservationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchPropertyReservationResponse](../../Models/Operations/PatchPropertyReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReservation

Deletes the CommerceReservation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReservation" method="delete" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\RemoveCommerceReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->removeCommerceReservation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveCommerceReservationRequest](../../Models/Operations/RemoveCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveCommerceReservationResponse](../../Models/Operations/RemoveCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReservation

Updates the CommerceReservation identified by `id`. Provide the unified CommerceReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReservation" method="put" path="/commerce/{connection_id}/reservation/{id}" example="commerce_reservation" -->
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

$request = new Operations\UpdateCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: '9e2646b3-43f6-4737-9d77-052f2b5e4ee0',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-06T01:02:11.781Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->updateCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateCommerceReservationRequest](../../Models/Operations/UpdateCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateCommerceReservationResponse](../../Models/Operations/UpdateCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePropertyReservation

Updates the PropertyReservation identified by `id`. Provide the unified PropertyReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePropertyReservation" method="put" path="/property/{connection_id}/reservation/{id}" example="property_reservation" -->
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

$request = new Operations\UpdatePropertyReservationRequest(
    propertyReservation: new Shared\PropertyReservation(
        adults: 4,
        balanceAmount: 2181.6,
        children: 2,
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: 'f7dac597-b970-450e-9da0-d5386dbe9c76',
        lineItems: [
            new Shared\PropertyLineitem(
                amount: 1980,
                description: '11 nights',
                isMandatory: true,
                name: 'Accommodation',
                type: Shared\PropertyLineitemType::Base,
            ),
            new Shared\PropertyLineitem(
                amount: 162,
                isMandatory: true,
                name: 'Cleaning fee',
                type: Shared\PropertyLineitemType::Fee,
            ),
            new Shared\PropertyLineitem(
                amount: 237.6,
                isMandatory: true,
                name: 'Lodging tax',
                type: Shared\PropertyLineitemType::Tax,
            ),
            new Shared\PropertyLineitem(
                amount: -198,
                isMandatory: false,
                name: 'Weekly discount',
                type: Shared\PropertyLineitemType::Discount,
            ),
        ],
        metadata: [],
        nights: 11,
        notes: 'Conculco volaticus vis volva quas trepide vae earum temptatio tertius.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T12:57:10.261Z'),
        webUrl: 'https://antique-tennis.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->reservation->updatePropertyReservation(
    request: $request
);

if ($response->propertyReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdatePropertyReservationRequest](../../Models/Operations/UpdatePropertyReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdatePropertyReservationResponse](../../Models/Operations/UpdatePropertyReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |