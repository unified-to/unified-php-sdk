# Guest

## Overview

### Available Operations

* [createPropertyGuest](#createpropertyguest) - Create a guest
* [getPropertyGuest](#getpropertyguest) - Retrieve a guest
* [listPropertyGuests](#listpropertyguests) - List all guests
* [patchPropertyGuest](#patchpropertyguest) - Update a guest
* [updatePropertyGuest](#updatepropertyguest) - Update a guest

## createPropertyGuest

Creates a PropertyGuest. Provide the unified PropertyGuest fields in the request body; they are mapped to the provider's API. Returns the created PropertyGuest.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyGuest" method="post" path="/property/{connection_id}/guest" example="property_guest" -->
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

$request = new Operations\CreatePropertyGuestRequest(
    propertyGuest: new Shared\PropertyGuest(
        address: new Shared\PropertyPropertyGuestAddress(
            address1: '874 Rice Trafficway',
            city: 'East Dollyside',
            country: 'Cameroon',
            countryCode: 'MX',
            postalCode: '51113-4329',
            region: 'Missouri',
        ),
        companyName: 'Kertzmann, Bednar and Bashirian',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'melissa.green@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Melissa',
        id: '4370f7c1-222b-4851-a39a-d0098d4dff8b',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/36.jpg',
        language: 'es',
        lastName: 'Green',
        metadata: [],
        name: 'Melissa Green',
        nationality: 'SI',
        notes: 'Minus incidunt corporis.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14564841285',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-04T04:59:21.266Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->guest->createPropertyGuest(
    request: $request
);

if ($response->propertyGuest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreatePropertyGuestRequest](../../Models/Operations/CreatePropertyGuestRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreatePropertyGuestResponse](../../Models/Operations/CreatePropertyGuestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyGuest

Retrieves a single PropertyGuest by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyGuest" method="get" path="/property/{connection_id}/guest/{id}" -->
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

$request = new Operations\GetPropertyGuestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->guest->getPropertyGuest(
    request: $request
);

if ($response->propertyGuest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPropertyGuestRequest](../../Models/Operations/GetPropertyGuestRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetPropertyGuestResponse](../../Models/Operations/GetPropertyGuestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyGuests

Returns a list of PropertyGuests. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyGuests" method="get" path="/property/{connection_id}/guest" -->
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

$request = new Operations\ListPropertyGuestsRequest(
    connectionId: '<id>',
);

$response = $sdk->guest->listPropertyGuests(
    request: $request
);

if ($response->propertyGuests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPropertyGuestsRequest](../../Models/Operations/ListPropertyGuestsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListPropertyGuestsResponse](../../Models/Operations/ListPropertyGuestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPropertyGuest

Updates the PropertyGuest identified by `id`. Provide the unified PropertyGuest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPropertyGuest" method="patch" path="/property/{connection_id}/guest/{id}" example="property_guest" -->
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

$request = new Operations\PatchPropertyGuestRequest(
    propertyGuest: new Shared\PropertyGuest(
        address: new Shared\PropertyPropertyGuestAddress(
            address1: '874 Rice Trafficway',
            city: 'East Dollyside',
            country: 'Cameroon',
            countryCode: 'MX',
            postalCode: '51113-4329',
            region: 'Missouri',
        ),
        companyName: 'Kertzmann, Bednar and Bashirian',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'melissa.green@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Melissa',
        id: '8886e274-450d-41f2-9bee-89c8247de57a',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/36.jpg',
        language: 'es',
        lastName: 'Green',
        metadata: [],
        name: 'Melissa Green',
        nationality: 'SI',
        notes: 'Minus incidunt corporis.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14564841285',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-04T04:59:21.290Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->guest->patchPropertyGuest(
    request: $request
);

if ($response->propertyGuest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchPropertyGuestRequest](../../Models/Operations/PatchPropertyGuestRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchPropertyGuestResponse](../../Models/Operations/PatchPropertyGuestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePropertyGuest

Updates the PropertyGuest identified by `id`. Provide the unified PropertyGuest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePropertyGuest" method="put" path="/property/{connection_id}/guest/{id}" example="property_guest" -->
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

$request = new Operations\UpdatePropertyGuestRequest(
    propertyGuest: new Shared\PropertyGuest(
        address: new Shared\PropertyPropertyGuestAddress(
            address1: '874 Rice Trafficway',
            city: 'East Dollyside',
            country: 'Cameroon',
            countryCode: 'MX',
            postalCode: '51113-4329',
            region: 'Missouri',
        ),
        companyName: 'Kertzmann, Bednar and Bashirian',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'melissa.green@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Melissa',
        id: '8886e274-450d-41f2-9bee-89c8247de57a',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/male/512/36.jpg',
        language: 'es',
        lastName: 'Green',
        metadata: [],
        name: 'Melissa Green',
        nationality: 'SI',
        notes: 'Minus incidunt corporis.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14564841285',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-04T04:59:21.290Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->guest->updatePropertyGuest(
    request: $request
);

if ($response->propertyGuest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdatePropertyGuestRequest](../../Models/Operations/UpdatePropertyGuestRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdatePropertyGuestResponse](../../Models/Operations/UpdatePropertyGuestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |