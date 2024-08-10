# Location


### Available Operations

* [createCommerceLocation](#createcommercelocation) - Create a location
* [createHrisLocation](#createhrislocation) - Create a location
* [getCommerceLocation](#getcommercelocation) - Retrieve a location
* [getHrisLocation](#gethrislocation) - Retrieve a location
* [listCommerceLocations](#listcommercelocations) - List all locations
* [listHrisLocations](#listhrislocations) - List all locations
* [patchCommerceLocation](#patchcommercelocation) - Update a location
* [patchHrisLocation](#patchhrislocation) - Update a location
* [removeCommerceLocation](#removecommercelocation) - Remove a location
* [removeHrisLocation](#removehrislocation) - Remove a location
* [updateCommerceLocation](#updatecommercelocation) - Update a location
* [updateHrisLocation](#updatehrislocation) - Update a location

## createCommerceLocation

Create a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateCommerceLocationRequest(
        connectionId: '<value>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'North Marysecester',
                country: 'Maldives',
                countryCode: 'CU',
                postalCode: '81935',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-01-11T11:46:34.114Z'),
            description: 'Persevering 5th generation capability',
            id: '<id>',
            isActive: false,
            raw: [
                'Planner' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-07-11T11:05:08.665Z'),
        ),
    );
    $response = $sdk->location->createCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## createHrisLocation

Create a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateHrisLocationRequest(
        connectionId: '<value>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Port Trinityshire',
                country: 'Saint Pierre and Miquelon',
                countryCode: 'GE',
                postalCode: '72153',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-11-01T01:29:28.442Z'),
            currency: 'CFA Franc BCEAO',
            description: 'Persistent eco-centric pricing structure',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'male' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'America/Argentina/Buenos_Aires',
            updatedAt: Utils\Utils::parseDateTime('2023-07-17T19:29:27.962Z'),
        ),
    );
    $response = $sdk->location->createHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisLocationRequest](../../Models/Operations/CreateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\CreateHrisLocationResponse](../../Models/Operations/CreateHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getCommerceLocation

Retrieve a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->location->getCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getHrisLocation

Retrieve a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->location->getHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisLocationRequest](../../Models/Operations/GetHrisLocationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\GetHrisLocationResponse](../../Models/Operations/GetHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listCommerceLocations

List all locations

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListCommerceLocationsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2087.22,
        offset: 1166.59,
        query: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-09T14:52:37.550Z'),
    );
    $response = $sdk->location->listCommerceLocations($request);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listHrisLocations

List all locations

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListHrisLocationsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5896.74,
        offset: 7281.87,
        query: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-05-12T05:34:35.160Z'),
    );
    $response = $sdk->location->listHrisLocations($request);

    if ($response->hrisLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisLocationsRequest](../../Models/Operations/ListHrisLocationsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\ListHrisLocationsResponse](../../Models/Operations/ListHrisLocationsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchCommerceLocation

Update a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Lonniefurt',
                country: 'Libyan Arab Jamahiriya',
                countryCode: 'KM',
                postalCode: '64647',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-03-12T06:32:06.220Z'),
            description: 'Managed real-time forecast',
            id: '<id>',
            isActive: false,
            raw: [
                'COM' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-02T05:15:52.185Z'),
        ),
    );
    $response = $sdk->location->patchCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchHrisLocation

Update a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Jeanieshire',
                country: 'Lao People\'s Democratic Republic',
                countryCode: 'SA',
                postalCode: '01257-5261',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-01-19T04:39:31.681Z'),
            currency: 'Swiss Franc',
            description: 'Multi-lateral maximized website',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'like' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'Asia/Tehran',
            updatedAt: Utils\Utils::parseDateTime('2024-08-09T18:51:28.735Z'),
        ),
    );
    $response = $sdk->location->patchHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisLocationRequest](../../Models/Operations/PatchHrisLocationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\PatchHrisLocationResponse](../../Models/Operations/PatchHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeCommerceLocation

Remove a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->location->removeCommerceLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeHrisLocation

Remove a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->location->removeHrisLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisLocationRequest](../../Models/Operations/RemoveHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\RemoveHrisLocationResponse](../../Models/Operations/RemoveHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateCommerceLocation

Update a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Stillwater',
                country: 'Sierra Leone',
                countryCode: 'AL',
                postalCode: '49876-8332',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2022-04-19T11:29:36.755Z'),
            description: 'Customizable interactive Graphic Interface',
            id: '<id>',
            isActive: false,
            raw: [
                'Van' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-22T20:47:46.586Z'),
        ),
    );
    $response = $sdk->location->updateCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateHrisLocation

Update a location

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateHrisLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisLocation: new Shared\HrisLocation(
            address: new Shared\PropertyHrisLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Willieton',
                country: 'Antarctica (the territory South of 60 deg S)',
                countryCode: 'AM',
                postalCode: '16560',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-02-06T16:46:59.275Z'),
            currency: 'Guinea Franc',
            description: 'Horizontal solution-oriented conglomeration',
            externalIdentifier: '<value>',
            id: '<id>',
            isActive: false,
            isHq: false,
            languageLocale: '<value>',
            name: '<value>',
            parentId: '<value>',
            raw: [
                'West' => '<value>',
            ],
            telephones: [
                new Shared\HrisTelephone,
            ],
            timezone: 'Asia/Kamchatka',
            updatedAt: Utils\Utils::parseDateTime('2024-02-23T01:10:31.769Z'),
        ),
    );
    $response = $sdk->location->updateHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisLocationRequest](../../Models/Operations/UpdateHrisLocationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\UpdateHrisLocationResponse](../../Models/Operations/UpdateHrisLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
