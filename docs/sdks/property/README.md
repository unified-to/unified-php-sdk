# Property

## Overview

### Available Operations

* [createAnalyticsProperty](#createanalyticsproperty) - Create a property
* [createPropertyConversation](#createpropertyconversation) - Create a conversation
* [createPropertyGuest](#createpropertyguest) - Create a guest
* [createPropertyListing](#createpropertylisting) - Create a listing
* [createPropertyQuote](#createpropertyquote) - Create a quote
* [createPropertyReservation](#createpropertyreservation) - Create a reservation
* [getAnalyticsProperty](#getanalyticsproperty) - Retrieve a property
* [getPropertyConversation](#getpropertyconversation) - Retrieve a conversation
* [getPropertyGuest](#getpropertyguest) - Retrieve a guest
* [getPropertyListing](#getpropertylisting) - Retrieve a listing
* [getPropertyReservation](#getpropertyreservation) - Retrieve a reservation
* [getPropertyReview](#getpropertyreview) - Retrieve a review
* [getPropertyUnittype](#getpropertyunittype) - Retrieve an unittype
* [listAnalyticsProperties](#listanalyticsproperties) - List all properties
* [listPropertyAvailabilities](#listpropertyavailabilities) - List all availabilities
* [listPropertyConversations](#listpropertyconversations) - List all conversations
* [listPropertyGuests](#listpropertyguests) - List all guests
* [listPropertyListings](#listpropertylistings) - List all listings
* [listPropertyReservations](#listpropertyreservations) - List all reservations
* [listPropertyReviews](#listpropertyreviews) - List all reviews
* [listPropertyUnittypes](#listpropertyunittypes) - List all unittypes
* [patchAnalyticsProperty](#patchanalyticsproperty) - Update a property
* [patchPropertyGuest](#patchpropertyguest) - Update a guest
* [patchPropertyListing](#patchpropertylisting) - Update a listing
* [patchPropertyReservation](#patchpropertyreservation) - Update a reservation
* [patchPropertyReview](#patchpropertyreview) - Update a review
* [removeAnalyticsProperty](#removeanalyticsproperty) - Remove a property
* [removePropertyGuest](#removepropertyguest) - Remove a guest
* [removePropertyListing](#removepropertylisting) - Remove a listing
* [removePropertyReservation](#removepropertyreservation) - Remove a reservation
* [updateAnalyticsProperty](#updateanalyticsproperty) - Update a property
* [updatePropertyGuest](#updatepropertyguest) - Update a guest
* [updatePropertyListing](#updatepropertylisting) - Update a listing
* [updatePropertyReservation](#updatepropertyreservation) - Update a reservation
* [updatePropertyReview](#updatepropertyreview) - Update a review

## createAnalyticsProperty

Creates a AnalyticsProperty. Provide the unified AnalyticsProperty fields in the request body; they are mapped to the provider's API. Returns the created AnalyticsProperty.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsProperty" method="post" path="/analytics/{connection_id}/property" example="analytics_property" -->
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

$request = new Operations\CreateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: '6746e78f-57c9-4b66-8535-99d446a46257',
        name: 'Graham - Glover',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-15T00:51:12.334Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAnalyticsPropertyRequest](../../Models/Operations/CreateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAnalyticsPropertyResponse](../../Models/Operations/CreateAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPropertyConversation

Creates a PropertyConversation. Provide the unified PropertyConversation fields in the request body; they are mapped to the provider's API. Returns the created PropertyConversation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyConversation" method="post" path="/property/{connection_id}/conversation" example="property_conversation" -->
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

$request = new Operations\CreatePropertyConversationRequest(
    propertyConversation: new Shared\PropertyConversation(
        createdAt: Utils\Utils::parseDateTime('2022-06-20T00:02:46.530Z'),
        guestName: 'Maida Funk',
        id: '41fbfd93-90d6-4aa9-92de-7e15b5601845',
        isUnread: false,
        messages: [
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2025-05-11T06:51:17.754Z'),
                id: 'a4570ba0-831d-4685-983d-80ec523becf8',
                isAutomatic: false,
                message: 'Sophismata admitto colo.',
                senderName: 'Maida Funk',
                senderType: Shared\SenderType::Guest,
            ),
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2026-05-31T10:30:10.373Z'),
                id: '18e8ddf7-3242-49b8-b925-f83781c24733',
                message: 'Aufero torrens tonsor aequitas torqueo curiositas cimentarius repellendus auditor.',
                senderName: 'Alysson Sanford',
                senderType: Shared\SenderType::Host,
            ),
        ],
        metadata: [],
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-05-31T10:30:10.373Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createPropertyConversation(
    request: $request
);

if ($response->propertyConversation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreatePropertyConversationRequest](../../Models/Operations/CreatePropertyConversationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreatePropertyConversationResponse](../../Models/Operations/CreatePropertyConversationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
            address1: '5781 Jules Rest',
            city: 'Brandiborough',
            country: 'Uruguay',
            countryCode: 'IS',
            postalCode: '29167',
            region: 'Mississippi',
        ),
        companyName: 'Hettinger - Lockman',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'ed.pacocha@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Ed',
        id: '18ef5e10-ce0b-4345-94a2-d9a47b126c30',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/48.jpg',
        language: 'es',
        lastName: 'Pacocha',
        metadata: [],
        name: 'Ed Pacocha',
        nationality: 'AW',
        notes: 'Officia cinis corrumpo conspergo delibero contra bos repellat.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14843285877',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T22:16:52.037Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createPropertyGuest(
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
        id: '076385c5-1900-4c99-8e26-3ede5f1db7f9',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T03:30:51.693Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createPropertyListing(
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

## createPropertyQuote

Creates a PropertyQuote. Provide the unified PropertyQuote fields in the request body; they are mapped to the provider's API. Returns the created PropertyQuote.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyQuote" method="post" path="/property/{connection_id}/quote" example="property_quote" -->
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

$request = new Operations\CreatePropertyQuoteRequest(
    propertyQuote: new Shared\PropertyQuote(
        adults: 1,
        children: 1,
        createdAt: Utils\Utils::parseDateTime('2020-12-18T19:14:11.415Z'),
        currency: 'USD',
        depositAmount: 594.54,
        endAt: Utils\Utils::parseDateTime('2026-12-12'),
        guests: 2,
        id: '903419a1-9889-4de8-9146-59339ddb133d',
        lineItems: [
            new Shared\PropertyLineitem(
                amount: 1665,
                description: '9 nights',
                isMandatory: true,
                name: 'Accommodation',
                type: Shared\PropertyLineitemType::Base,
            ),
            new Shared\PropertyLineitem(
                amount: 117,
                isMandatory: true,
                name: 'Cleaning fee',
                type: Shared\PropertyLineitemType::Fee,
            ),
            new Shared\PropertyLineitem(
                amount: 199.8,
                isMandatory: true,
                name: 'Lodging tax',
                type: Shared\PropertyLineitemType::Tax,
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-12-03'),
        totalAmount: 1981.8,
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createPropertyQuote(
    request: $request
);

if ($response->propertyQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreatePropertyQuoteRequest](../../Models/Operations/CreatePropertyQuoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreatePropertyQuoteResponse](../../Models/Operations/CreatePropertyQuoteResponse.md)**

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
        confirmationCode: 'TDDQ88ZYCY',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'mariam.metz@hotmail.com',
        guestName: 'Mariam Metz',
        guests: 6,
        id: '7203dd6b-0409-4020-9aaf-bf32ff611557',
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
        notes: 'Volva quas trepide vae earum temptatio tertius dedico adfectus veniam.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-19T10:40:39.710Z'),
        webUrl: 'https://winged-lox.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->property->createPropertyReservation(
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

## getAnalyticsProperty

Retrieves a single AnalyticsProperty by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsProperty" method="get" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\GetAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsPropertyRequest](../../Models/Operations/GetAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsPropertyResponse](../../Models/Operations/GetAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyConversation

Retrieves a single PropertyConversation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyConversation" method="get" path="/property/{connection_id}/conversation/{id}" -->
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

$request = new Operations\GetPropertyConversationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getPropertyConversation(
    request: $request
);

if ($response->propertyConversation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetPropertyConversationRequest](../../Models/Operations/GetPropertyConversationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetPropertyConversationResponse](../../Models/Operations/GetPropertyConversationResponse.md)**

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

$response = $sdk->property->getPropertyGuest(
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

$response = $sdk->property->getPropertyListing(
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

$response = $sdk->property->getPropertyReservation(
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

## getPropertyReview

Retrieves a single PropertyReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyReview" method="get" path="/property/{connection_id}/review/{id}" -->
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

$request = new Operations\GetPropertyReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getPropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPropertyReviewRequest](../../Models/Operations/GetPropertyReviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPropertyReviewResponse](../../Models/Operations/GetPropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyUnittype

Retrieves a single PropertyUnittype by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyUnittype" method="get" path="/property/{connection_id}/unittype/{id}" -->
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

$request = new Operations\GetPropertyUnittypeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->getPropertyUnittype(
    request: $request
);

if ($response->propertyUnittype !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetPropertyUnittypeRequest](../../Models/Operations/GetPropertyUnittypeRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetPropertyUnittypeResponse](../../Models/Operations/GetPropertyUnittypeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsProperties

Returns a list of AnalyticsProperties. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsProperties" method="get" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\ListAnalyticsPropertiesRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listAnalyticsProperties(
    request: $request
);

if ($response->analyticsProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAnalyticsPropertiesRequest](../../Models/Operations/ListAnalyticsPropertiesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAnalyticsPropertiesResponse](../../Models/Operations/ListAnalyticsPropertiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyAvailabilities

Returns a list of PropertyAvailabilities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyAvailabilities" method="get" path="/property/{connection_id}/availability" -->
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

$request = new Operations\ListPropertyAvailabilitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listPropertyAvailabilities(
    request: $request
);

if ($response->propertyAvailabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListPropertyAvailabilitiesRequest](../../Models/Operations/ListPropertyAvailabilitiesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListPropertyAvailabilitiesResponse](../../Models/Operations/ListPropertyAvailabilitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyConversations

Returns a list of PropertyConversations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyConversations" method="get" path="/property/{connection_id}/conversation" -->
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

$request = new Operations\ListPropertyConversationsRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listPropertyConversations(
    request: $request
);

if ($response->propertyConversations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListPropertyConversationsRequest](../../Models/Operations/ListPropertyConversationsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListPropertyConversationsResponse](../../Models/Operations/ListPropertyConversationsResponse.md)**

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

$response = $sdk->property->listPropertyGuests(
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

$response = $sdk->property->listPropertyListings(
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

$response = $sdk->property->listPropertyReservations(
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

## listPropertyReviews

Returns a list of PropertyReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyReviews" method="get" path="/property/{connection_id}/review" -->
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

$request = new Operations\ListPropertyReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listPropertyReviews(
    request: $request
);

if ($response->propertyReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPropertyReviewsRequest](../../Models/Operations/ListPropertyReviewsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPropertyReviewsResponse](../../Models/Operations/ListPropertyReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyUnittypes

Returns a list of PropertyUnittypes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyUnittypes" method="get" path="/property/{connection_id}/unittype" -->
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

$request = new Operations\ListPropertyUnittypesRequest(
    connectionId: '<id>',
);

$response = $sdk->property->listPropertyUnittypes(
    request: $request
);

if ($response->propertyUnittypes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListPropertyUnittypesRequest](../../Models/Operations/ListPropertyUnittypesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListPropertyUnittypesResponse](../../Models/Operations/ListPropertyUnittypesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsProperty

Updates the AnalyticsProperty identified by `id`. Provide the unified AnalyticsProperty fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsProperty" method="patch" path="/analytics/{connection_id}/property/{id}" example="analytics_property" -->
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

$request = new Operations\PatchAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: '337b7e4c-e393-46a3-a62d-00bed9188e60',
        name: 'Graham - Glover',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-15T00:51:12.334Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAnalyticsPropertyRequest](../../Models/Operations/PatchAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAnalyticsPropertyResponse](../../Models/Operations/PatchAnalyticsPropertyResponse.md)**

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
            address1: '5781 Jules Rest',
            city: 'Brandiborough',
            country: 'Uruguay',
            countryCode: 'IS',
            postalCode: '29167',
            region: 'Mississippi',
        ),
        companyName: 'Hettinger - Lockman',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'ed.pacocha@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Ed',
        id: 'bcda34cc-aecd-4ce6-845c-58144de03581',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/48.jpg',
        language: 'es',
        lastName: 'Pacocha',
        metadata: [],
        name: 'Ed Pacocha',
        nationality: 'AW',
        notes: 'Officia cinis corrumpo conspergo delibero contra bos repellat.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14843285877',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T22:16:52.047Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchPropertyGuest(
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
        id: 'ea2b5e95-b405-41e3-bb12-deb9dd987a3e',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T03:30:51.711Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchPropertyListing(
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
        confirmationCode: 'TDDQ88ZYCY',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'mariam.metz@hotmail.com',
        guestName: 'Mariam Metz',
        guests: 6,
        id: '3693e08d-7bcb-41a2-9731-12a7a528162b',
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
        notes: 'Volva quas trepide vae earum temptatio tertius dedico adfectus veniam.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-19T10:40:39.713Z'),
        webUrl: 'https://winged-lox.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchPropertyReservation(
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

## patchPropertyReview

Updates the PropertyReview identified by `id`. Provide the unified PropertyReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPropertyReview" method="patch" path="/property/{connection_id}/review/{id}" example="property_review" -->
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

$request = new Operations\PatchPropertyReviewRequest(
    propertyReview: new Shared\PropertyReview(
        authorName: 'Hilma Volkman',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Sum blanditiis terreo adinventitias capitulus dolorem verus studio voluptates temperantia.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Avarus caelum curvo utor odit arcesso quisquam.',
                rating: 4,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Communication,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Checkin,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Location,
                rating: 2,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Value,
                comment: 'Iusto artificiose odit nemo sui.',
                rating: 5,
            ),
        ],
        content: 'Attonbitus comitatus auditor. Tergo nostrum deleo vomica comprehendo tertius summopere. Apparatus incidunt tabula pauci confido colo fugiat umquam perferendis amitto.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: 'd2279bc3-0ab8-4fa1-9dc5-880c2159257c',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Patria stella magni.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-03-14T09:26:41.552Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->patchPropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchPropertyReviewRequest](../../Models/Operations/PatchPropertyReviewRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchPropertyReviewResponse](../../Models/Operations/PatchPropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsProperty

Deletes the AnalyticsProperty identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsProperty" method="delete" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\RemoveAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->removeAnalyticsProperty(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAnalyticsPropertyRequest](../../Models/Operations/RemoveAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAnalyticsPropertyResponse](../../Models/Operations/RemoveAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePropertyGuest

Deletes the PropertyGuest identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePropertyGuest" method="delete" path="/property/{connection_id}/guest/{id}" -->
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

$request = new Operations\RemovePropertyGuestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->removePropertyGuest(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemovePropertyGuestRequest](../../Models/Operations/RemovePropertyGuestRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemovePropertyGuestResponse](../../Models/Operations/RemovePropertyGuestResponse.md)**

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

$response = $sdk->property->removePropertyListing(
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

## removePropertyReservation

Deletes the PropertyReservation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePropertyReservation" method="delete" path="/property/{connection_id}/reservation/{id}" -->
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

$request = new Operations\RemovePropertyReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->removePropertyReservation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemovePropertyReservationRequest](../../Models/Operations/RemovePropertyReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemovePropertyReservationResponse](../../Models/Operations/RemovePropertyReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsProperty

Updates the AnalyticsProperty identified by `id`. Provide the unified AnalyticsProperty fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsProperty" method="put" path="/analytics/{connection_id}/property/{id}" example="analytics_property" -->
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

$request = new Operations\UpdateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: '337b7e4c-e393-46a3-a62d-00bed9188e60',
        name: 'Graham - Glover',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-15T00:51:12.334Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updateAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAnalyticsPropertyRequest](../../Models/Operations/UpdateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAnalyticsPropertyResponse](../../Models/Operations/UpdateAnalyticsPropertyResponse.md)**

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
            address1: '5781 Jules Rest',
            city: 'Brandiborough',
            country: 'Uruguay',
            countryCode: 'IS',
            postalCode: '29167',
            region: 'Mississippi',
        ),
        companyName: 'Hettinger - Lockman',
        createdAt: Utils\Utils::parseDateTime('2021-10-17T05:59:05.070Z'),
        emails: [
            new Shared\PropertyEmail(
                email: 'ed.pacocha@icloud.com',
                type: Shared\PropertyEmailType::Home,
            ),
        ],
        firstName: 'Ed',
        id: 'bcda34cc-aecd-4ce6-845c-58144de03581',
        imageUrl: 'https://cdn.jsdelivr.net/gh/faker-js/assets-person-portrait/female/512/48.jpg',
        language: 'es',
        lastName: 'Pacocha',
        metadata: [],
        name: 'Ed Pacocha',
        nationality: 'AW',
        notes: 'Officia cinis corrumpo conspergo delibero contra bos repellat.',
        telephones: [
            new Shared\PropertyTelephone(
                telephone: '+14843285877',
                type: Shared\PropertyTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2025-07-24T22:16:52.047Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updatePropertyGuest(
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
        id: 'ea2b5e95-b405-41e3-bb12-deb9dd987a3e',
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
        updatedAt: Utils\Utils::parseDateTime('2026-10-05T03:30:51.711Z'),
        webUrl: 'https://oval-junior.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updatePropertyListing(
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
        confirmationCode: 'TDDQ88ZYCY',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'mariam.metz@hotmail.com',
        guestName: 'Mariam Metz',
        guests: 6,
        id: '3693e08d-7bcb-41a2-9731-12a7a528162b',
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
        notes: 'Volva quas trepide vae earum temptatio tertius dedico adfectus veniam.',
        paidAmount: 0,
        pets: 1,
        source: 'Vrbo',
        startAt: Utils\Utils::parseDateTime('2022-09-25T17:17:08.838Z'),
        status: Shared\PropertyReservationStatus::Pending,
        totalAmount: 2181.6,
        updatedAt: Utils\Utils::parseDateTime('2022-11-19T10:40:39.713Z'),
        webUrl: 'https://winged-lox.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updatePropertyReservation(
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

## updatePropertyReview

Updates the PropertyReview identified by `id`. Provide the unified PropertyReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePropertyReview" method="put" path="/property/{connection_id}/review/{id}" example="property_review" -->
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

$request = new Operations\UpdatePropertyReviewRequest(
    propertyReview: new Shared\PropertyReview(
        authorName: 'Hilma Volkman',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Sum blanditiis terreo adinventitias capitulus dolorem verus studio voluptates temperantia.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Avarus caelum curvo utor odit arcesso quisquam.',
                rating: 4,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Communication,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Checkin,
                rating: 1,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Location,
                rating: 2,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Value,
                comment: 'Iusto artificiose odit nemo sui.',
                rating: 5,
            ),
        ],
        content: 'Attonbitus comitatus auditor. Tergo nostrum deleo vomica comprehendo tertius summopere. Apparatus incidunt tabula pauci confido colo fugiat umquam perferendis amitto.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: 'd2279bc3-0ab8-4fa1-9dc5-880c2159257c',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Patria stella magni.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-03-14T09:26:41.552Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->property->updatePropertyReview(
    request: $request
);

if ($response->propertyReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdatePropertyReviewRequest](../../Models/Operations/UpdatePropertyReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdatePropertyReviewResponse](../../Models/Operations/UpdatePropertyReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |