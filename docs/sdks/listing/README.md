# Listing

## Overview

### Available Operations

* [createPropertyListing](#createpropertylisting) - Create a listing
* [getPropertyListing](#getpropertylisting) - Retrieve a listing
* [listPropertyListings](#listpropertylistings) - List all listings
* [patchPropertyListing](#patchpropertylisting) - Update a listing
* [removePropertyListing](#removepropertylisting) - Remove a listing
* [updatePropertyListing](#updatepropertylisting) - Update a listing

## createPropertyListing

Creates a PropertyListing. Provide the unified PropertyListing fields in the request body; they are mapped to the provider's API. Returns the created PropertyListing.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyListing" method="post" path="/property/{connection_id}/listing" example="property_listing" -->
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

$request = new Operations\CreatePropertyListingRequest(
    propertyListing: new Shared\PropertyListing(
        address: new Shared\PropertyPropertyListingAddress(
            address1: '7424 1st Avenue',
            city: 'Porterville',
            country: 'United States',
            countryCode: 'US',
            postalCode: '95594-3059',
            region: 'Louisiana',
            regionCode: 'ID',
        ),
        amenities: [
            'Wifi',
            'Kitchen',
            'Free parking',
        ],
        bathrooms: 1,
        bedrooms: 4,
        beds: 8,
        channels: [
            new Shared\PropertyChannel(
                name: 'Booking.com',
                webUrl: 'https://gentle-flat.name',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cruentus demoror censura caveo sponte statim. Cursim angulus arbitro barba summopere subnecto curto vulticulus comparo surgo. Carmen deputo defluo abscido conatus arbustum sequi abbas complectus demum.',
        houseRules: 'No smoking. No parties or events.',
        id: 'e3c47ce9-eb33-4a5a-a267-8d04ae8b99d4',
        imageUrls: [
            'https://picsum.photos/seed/cCdY57x3Vw/2822/2061',
            'https://picsum.photos/seed/nH6zsBCr/1004/2259',
        ],
        latitude: -73.4369,
        longitude: 97.314,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'ironclad Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-10-03T03:26:29.557Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->listing->createPropertyListing(
    request: $request
);

if ($response->propertyListing !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePropertyListingRequest](../../Models/Operations/CreatePropertyListingRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePropertyListingResponse](../../Models/Operations/CreatePropertyListingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyListing

Retrieves a single PropertyListing by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyListing" method="get" path="/property/{connection_id}/listing/{id}" -->
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

$request = new Operations\GetPropertyListingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->listing->getPropertyListing(
    request: $request
);

if ($response->propertyListing !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetPropertyListingRequest](../../Models/Operations/GetPropertyListingRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetPropertyListingResponse](../../Models/Operations/GetPropertyListingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyListings

Returns a list of PropertyListings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyListings" method="get" path="/property/{connection_id}/listing" -->
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

$request = new Operations\ListPropertyListingsRequest(
    connectionId: '<id>',
);

$response = $sdk->listing->listPropertyListings(
    request: $request
);

if ($response->propertyListings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListPropertyListingsRequest](../../Models/Operations/ListPropertyListingsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListPropertyListingsResponse](../../Models/Operations/ListPropertyListingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPropertyListing

Updates the PropertyListing identified by `id`. Provide the unified PropertyListing fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPropertyListing" method="patch" path="/property/{connection_id}/listing/{id}" example="property_listing" -->
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

$request = new Operations\PatchPropertyListingRequest(
    propertyListing: new Shared\PropertyListing(
        address: new Shared\PropertyPropertyListingAddress(
            address1: '7424 1st Avenue',
            city: 'Porterville',
            country: 'United States',
            countryCode: 'US',
            postalCode: '95594-3059',
            region: 'Louisiana',
            regionCode: 'ID',
        ),
        amenities: [
            'Wifi',
            'Kitchen',
            'Free parking',
        ],
        bathrooms: 1,
        bedrooms: 4,
        beds: 8,
        channels: [
            new Shared\PropertyChannel(
                name: 'Booking.com',
                webUrl: 'https://gentle-flat.name',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cruentus demoror censura caveo sponte statim. Cursim angulus arbitro barba summopere subnecto curto vulticulus comparo surgo. Carmen deputo defluo abscido conatus arbustum sequi abbas complectus demum.',
        houseRules: 'No smoking. No parties or events.',
        id: '7852240f-d3e6-45ea-9114-42799e530b0f',
        imageUrls: [
            'https://picsum.photos/seed/cCdY57x3Vw/2822/2061',
            'https://picsum.photos/seed/nH6zsBCr/1004/2259',
        ],
        latitude: -73.4369,
        longitude: 97.314,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'ironclad Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-10-03T03:26:29.590Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->listing->patchPropertyListing(
    request: $request
);

if ($response->propertyListing !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchPropertyListingRequest](../../Models/Operations/PatchPropertyListingRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchPropertyListingResponse](../../Models/Operations/PatchPropertyListingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePropertyListing

Deletes the PropertyListing identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePropertyListing" method="delete" path="/property/{connection_id}/listing/{id}" -->
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

$request = new Operations\RemovePropertyListingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->listing->removePropertyListing(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemovePropertyListingRequest](../../Models/Operations/RemovePropertyListingRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemovePropertyListingResponse](../../Models/Operations/RemovePropertyListingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePropertyListing

Updates the PropertyListing identified by `id`. Provide the unified PropertyListing fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePropertyListing" method="put" path="/property/{connection_id}/listing/{id}" example="property_listing" -->
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

$request = new Operations\UpdatePropertyListingRequest(
    propertyListing: new Shared\PropertyListing(
        address: new Shared\PropertyPropertyListingAddress(
            address1: '7424 1st Avenue',
            city: 'Porterville',
            country: 'United States',
            countryCode: 'US',
            postalCode: '95594-3059',
            region: 'Louisiana',
            regionCode: 'ID',
        ),
        amenities: [
            'Wifi',
            'Kitchen',
            'Free parking',
        ],
        bathrooms: 1,
        bedrooms: 4,
        beds: 8,
        channels: [
            new Shared\PropertyChannel(
                name: 'Booking.com',
                webUrl: 'https://gentle-flat.name',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cruentus demoror censura caveo sponte statim. Cursim angulus arbitro barba summopere subnecto curto vulticulus comparo surgo. Carmen deputo defluo abscido conatus arbustum sequi abbas complectus demum.',
        houseRules: 'No smoking. No parties or events.',
        id: '7852240f-d3e6-45ea-9114-42799e530b0f',
        imageUrls: [
            'https://picsum.photos/seed/cCdY57x3Vw/2822/2061',
            'https://picsum.photos/seed/nH6zsBCr/1004/2259',
        ],
        latitude: -73.4369,
        longitude: 97.314,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'ironclad Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-10-03T03:26:29.590Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->listing->updatePropertyListing(
    request: $request
);

if ($response->propertyListing !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdatePropertyListingRequest](../../Models/Operations/UpdatePropertyListingRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdatePropertyListingResponse](../../Models/Operations/UpdatePropertyListingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |