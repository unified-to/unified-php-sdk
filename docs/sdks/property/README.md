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
* [removePropertyListing](#removepropertylisting) - Remove a listing
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
        id: 'c51b82a2-8c36-4232-a491-3d6cd7754e72',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T21:27:44.320Z'),
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
        guestName: 'Evie Okuneva',
        id: 'f5018999-8b01-4da3-852f-37017df6ef8b',
        isUnread: false,
        messages: [
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2025-04-22T06:34:24.585Z'),
                id: '5037d7ff-7157-4065-b554-482a1fd728f5',
                isAutomatic: false,
                message: 'Vinitor caterva amor sophismata admitto colo tempore aufero torrens.',
                senderName: 'Evie Okuneva',
                senderType: Shared\SenderType::Guest,
            ),
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2026-05-05T11:50:52.293Z'),
                id: '480b24c6-1d25-4ca4-b803-d8b6e849d35b',
                message: 'Aequitas torqueo curiositas cimentarius repellendus auditor degero ademptio adnuo.',
                senderName: 'Ms. Patti Lynch',
                senderType: Shared\SenderType::Host,
            ),
        ],
        metadata: [],
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-05-05T11:50:52.293Z'),
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
        id: '038f8161-208d-438c-89bc-b26798df2777',
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
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T09:50:43.887Z'),
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
            address1: '9262 Bramley Close',
            city: 'New Andrewshire',
            country: 'United States',
            countryCode: 'US',
            postalCode: '53615-4664',
            region: 'Nebraska',
            regionCode: 'IL',
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
                webUrl: 'https://frightened-hyphenation.net/',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cuius deputo cruentus demoror censura caveo sponte statim vespillo cursim. Arbitro barba summopere. Curto vulticulus comparo surgo vociferor carmen deputo defluo.',
        houseRules: 'No smoking. No parties or events.',
        id: '23553428-a067-45ef-ba23-ddd2a2e52c42',
        imageUrls: [
            'https://loremflickr.com/23/1328?lock=5798241296161663',
            'https://loremflickr.com/12/1312?lock=6354590363728966',
        ],
        latitude: -5.4327,
        longitude: 98.9045,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'accurate Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-09-06T16:24:57.178Z'),
        webUrl: 'https://tight-pronoun.info/',
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
        endAt: Utils\Utils::parseDateTime('2026-11-13'),
        guests: 2,
        id: '2daa4299-feb0-44b7-a285-44b5b62e5827',
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
        startAt: Utils\Utils::parseDateTime('2026-11-04'),
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
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: '78486216-48b5-4940-851d-a9ef28c1f6f7',
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
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T10:16:07.411Z'),
        webUrl: 'https://antique-tennis.biz/',
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
        id: '4400cf3f-c3b8-4914-9a28-772a9d508e38',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T21:27:44.320Z'),
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
        id: '6cefb1f9-213b-4ba4-bac4-e76152e19844',
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
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T09:50:43.901Z'),
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
            address1: '9262 Bramley Close',
            city: 'New Andrewshire',
            country: 'United States',
            countryCode: 'US',
            postalCode: '53615-4664',
            region: 'Nebraska',
            regionCode: 'IL',
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
                webUrl: 'https://frightened-hyphenation.net/',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cuius deputo cruentus demoror censura caveo sponte statim vespillo cursim. Arbitro barba summopere. Curto vulticulus comparo surgo vociferor carmen deputo defluo.',
        houseRules: 'No smoking. No parties or events.',
        id: '7e1448a6-fab9-4edf-84f0-70d3686788e9',
        imageUrls: [
            'https://loremflickr.com/23/1328?lock=5798241296161663',
            'https://loremflickr.com/12/1312?lock=6354590363728966',
        ],
        latitude: -5.4327,
        longitude: 98.9045,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'accurate Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-09-06T16:24:57.202Z'),
        webUrl: 'https://tight-pronoun.info/',
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
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: 'b2d526e6-a476-4723-bb1d-6d68645ca941',
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
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T10:16:07.413Z'),
        webUrl: 'https://antique-tennis.biz/',
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
        authorName: 'Benton Jast',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Umquam perferendis amitto voluptas sum blanditiis terreo.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Capitulus dolorem verus.',
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
                comment: 'Quos constans aperte tero sollers.',
                rating: 5,
            ),
        ],
        content: 'Delectus conscendo communis custodia statim. Tutis adsuesco attonbitus comitatus auditor ea tergo nostrum deleo. Comprehendo tertius summopere vaco apparatus incidunt tabula pauci confido colo.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: '6ae7d8aa-4360-4b4e-a4ea-e7e63979fc42',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Tripudio neque communis.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-02-18T05:23:04.228Z'),
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
        id: '4400cf3f-c3b8-4914-9a28-772a9d508e38',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T21:27:44.320Z'),
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
        id: '6cefb1f9-213b-4ba4-bac4-e76152e19844',
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
        updatedAt: Utils\Utils::parseDateTime('2025-07-03T09:50:43.901Z'),
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
            address1: '9262 Bramley Close',
            city: 'New Andrewshire',
            country: 'United States',
            countryCode: 'US',
            postalCode: '53615-4664',
            region: 'Nebraska',
            regionCode: 'IL',
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
                webUrl: 'https://frightened-hyphenation.net/',
            ),
        ],
        checkInEndTime: '22:00',
        checkInStartTime: '15:00',
        checkOutTime: '11:00',
        cleaningFeeAmount: 134,
        createdAt: Utils\Utils::parseDateTime('2021-01-08T09:27:35.485Z'),
        currency: 'USD',
        description: 'Cuius deputo cruentus demoror censura caveo sponte statim vespillo cursim. Arbitro barba summopere. Curto vulticulus comparo surgo vociferor carmen deputo defluo.',
        houseRules: 'No smoking. No parties or events.',
        id: '7e1448a6-fab9-4edf-84f0-70d3686788e9',
        imageUrls: [
            'https://loremflickr.com/23/1328?lock=5798241296161663',
            'https://loremflickr.com/12/1312?lock=6354590363728966',
        ],
        latitude: -5.4327,
        longitude: 98.9045,
        maxNights: 15,
        maxOccupancy: 5,
        metadata: [],
        minNights: 1,
        name: 'accurate Loft',
        rating: 4.9,
        reviewCount: 343,
        startPriceAmount: 470,
        timezone: 'America/Los_Angeles',
        type: Shared\PropertyListingType::Room,
        updatedAt: Utils\Utils::parseDateTime('2026-09-06T16:24:57.202Z'),
        webUrl: 'https://tight-pronoun.info/',
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
        confirmationCode: 'GNLTDDQ88Z',
        createdAt: Utils\Utils::parseDateTime('2022-06-03T01:40:03.655Z'),
        currency: 'USD',
        endAt: Utils\Utils::parseDateTime('2022-10-06T17:17:08.838Z'),
        estimatedDepartureTime: '10:00',
        guestEmail: 'anya.parisian@hotmail.com',
        guestName: 'Anya Parisian',
        guests: 6,
        id: 'b2d526e6-a476-4723-bb1d-6d68645ca941',
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
        updatedAt: Utils\Utils::parseDateTime('2022-11-16T10:16:07.413Z'),
        webUrl: 'https://antique-tennis.biz/',
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
        authorName: 'Benton Jast',
        categoryRatings: [
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Cleanliness,
                comment: 'Umquam perferendis amitto voluptas sum blanditiis terreo.',
                rating: 5,
            ),
            new Shared\PropertyCategoryrating(
                category: Shared\PropertyCategoryratingCategory::Accuracy,
                comment: 'Capitulus dolorem verus.',
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
                comment: 'Quos constans aperte tero sollers.',
                rating: 5,
            ),
        ],
        content: 'Delectus conscendo communis custodia statim. Tutis adsuesco attonbitus comitatus auditor ea tergo nostrum deleo. Comprehendo tertius summopere vaco apparatus incidunt tabula pauci confido colo.',
        createdAt: Utils\Utils::parseDateTime('2022-10-17T11:17:07.682Z'),
        id: '6ae7d8aa-4360-4b4e-a4ea-e7e63979fc42',
        isPublic: true,
        metadata: [],
        privateFeedback: 'Tripudio neque communis.',
        rating: 3,
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-02-18T05:23:04.228Z'),
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