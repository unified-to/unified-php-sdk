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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'North Marysecester';
    $request->commerceLocation->address->country = 'Maldives';
    $request->commerceLocation->address->countryCode = 'CU';
    $request->commerceLocation->address->postalCode = '81935';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-11T11:46:34.114Z');
    $request->commerceLocation->description = 'Persevering 5th generation capability';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Planner' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-11T11:05:08.665Z');
    $request->connectionId = '<value>';;

    $response = $sdk->location->createCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**


## createHrisLocation

Create a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateHrisLocationRequest();
    $request->hrisLocation = new Shared\HrisLocation();
    $request->hrisLocation->address = new Shared\PropertyHrisLocationAddress();
    $request->hrisLocation->address->address1 = '<value>';
    $request->hrisLocation->address->address2 = '<value>';
    $request->hrisLocation->address->city = 'Port Trinityshire';
    $request->hrisLocation->address->country = 'Saint Pierre and Miquelon';
    $request->hrisLocation->address->countryCode = 'GE';
    $request->hrisLocation->address->postalCode = '72153';
    $request->hrisLocation->address->region = '<value>';
    $request->hrisLocation->address->regionCode = '<value>';
    $request->hrisLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-01T01:29:28.442Z');
    $request->hrisLocation->currency = 'CFA Franc BCEAO';
    $request->hrisLocation->description = 'Persistent eco-centric pricing structure';
    $request->hrisLocation->externalIdentifier = '<value>';
    $request->hrisLocation->id = '<id>';
    $request->hrisLocation->isActive = false;
    $request->hrisLocation->isHq = false;
    $request->hrisLocation->languageLocale = '<value>';
    $request->hrisLocation->name = '<value>';
    $request->hrisLocation->parentId = '<value>';
    $request->hrisLocation->raw = [
        'male' => '<value>',
    ];
    $request->hrisLocation->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisLocation->timezone = 'America/Argentina/Buenos_Aires';
    $request->hrisLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-17T19:29:27.962Z');
    $request->connectionId = '<value>';;

    $response = $sdk->location->createHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateHrisLocationRequest](../../Models/Operations/CreateHrisLocationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisLocationResponse](../../Models/Operations/CreateHrisLocationResponse.md)**


## getCommerceLocation

Retrieve a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->location->getCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**


## getHrisLocation

Retrieve a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetHrisLocationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->location->getHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetHrisLocationRequest](../../Models/Operations/GetHrisLocationRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisLocationResponse](../../Models/Operations/GetHrisLocationResponse.md)**


## listCommerceLocations

List all locations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceLocationsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2087.22;
    $request->offset = 1166.59;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T14:52:37.550Z');;

    $response = $sdk->location->listCommerceLocations($request);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**


## listHrisLocations

List all locations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListHrisLocationsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5896.74;
    $request->offset = 7281.87;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-12T05:34:35.160Z');;

    $response = $sdk->location->listHrisLocations($request);

    if ($response->hrisLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListHrisLocationsRequest](../../Models/Operations/ListHrisLocationsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisLocationsResponse](../../Models/Operations/ListHrisLocationsResponse.md)**


## patchCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'Lonniefurt';
    $request->commerceLocation->address->country = 'Libyan Arab Jamahiriya';
    $request->commerceLocation->address->countryCode = 'KM';
    $request->commerceLocation->address->postalCode = '64647';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-12T06:32:06.220Z');
    $request->commerceLocation->description = 'Managed real-time forecast';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'COM' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-02T05:15:52.185Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->patchCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**


## patchHrisLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchHrisLocationRequest();
    $request->hrisLocation = new Shared\HrisLocation();
    $request->hrisLocation->address = new Shared\PropertyHrisLocationAddress();
    $request->hrisLocation->address->address1 = '<value>';
    $request->hrisLocation->address->address2 = '<value>';
    $request->hrisLocation->address->city = 'Jeanieshire';
    $request->hrisLocation->address->country = 'Lao People\'s Democratic Republic';
    $request->hrisLocation->address->countryCode = 'SA';
    $request->hrisLocation->address->postalCode = '01257-5261';
    $request->hrisLocation->address->region = '<value>';
    $request->hrisLocation->address->regionCode = '<value>';
    $request->hrisLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-19T04:39:31.681Z');
    $request->hrisLocation->currency = 'Swiss Franc';
    $request->hrisLocation->description = 'Multi-lateral maximized website';
    $request->hrisLocation->externalIdentifier = '<value>';
    $request->hrisLocation->id = '<id>';
    $request->hrisLocation->isActive = false;
    $request->hrisLocation->isHq = false;
    $request->hrisLocation->languageLocale = '<value>';
    $request->hrisLocation->name = '<value>';
    $request->hrisLocation->parentId = '<value>';
    $request->hrisLocation->raw = [
        'like' => '<value>',
    ];
    $request->hrisLocation->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisLocation->timezone = 'Asia/Tehran';
    $request->hrisLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-09T18:51:28.735Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->patchHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchHrisLocationRequest](../../Models/Operations/PatchHrisLocationRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisLocationResponse](../../Models/Operations/PatchHrisLocationResponse.md)**


## removeCommerceLocation

Remove a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->removeCommerceLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**


## removeHrisLocation

Remove a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveHrisLocationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->removeHrisLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveHrisLocationRequest](../../Models/Operations/RemoveHrisLocationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisLocationResponse](../../Models/Operations/RemoveHrisLocationResponse.md)**


## updateCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'Stillwater';
    $request->commerceLocation->address->country = 'Sierra Leone';
    $request->commerceLocation->address->countryCode = 'AL';
    $request->commerceLocation->address->postalCode = '49876-8332';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-19T11:29:36.755Z');
    $request->commerceLocation->description = 'Customizable interactive Graphic Interface';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Van' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-22T20:47:46.586Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->updateCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**


## updateHrisLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateHrisLocationRequest();
    $request->hrisLocation = new Shared\HrisLocation();
    $request->hrisLocation->address = new Shared\PropertyHrisLocationAddress();
    $request->hrisLocation->address->address1 = '<value>';
    $request->hrisLocation->address->address2 = '<value>';
    $request->hrisLocation->address->city = 'Willieton';
    $request->hrisLocation->address->country = 'Antarctica (the territory South of 60 deg S)';
    $request->hrisLocation->address->countryCode = 'AM';
    $request->hrisLocation->address->postalCode = '16560';
    $request->hrisLocation->address->region = '<value>';
    $request->hrisLocation->address->regionCode = '<value>';
    $request->hrisLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-06T16:46:59.275Z');
    $request->hrisLocation->currency = 'Guinea Franc';
    $request->hrisLocation->description = 'Horizontal solution-oriented conglomeration';
    $request->hrisLocation->externalIdentifier = '<value>';
    $request->hrisLocation->id = '<id>';
    $request->hrisLocation->isActive = false;
    $request->hrisLocation->isHq = false;
    $request->hrisLocation->languageLocale = '<value>';
    $request->hrisLocation->name = '<value>';
    $request->hrisLocation->parentId = '<value>';
    $request->hrisLocation->raw = [
        'West' => '<value>',
    ];
    $request->hrisLocation->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisLocation->timezone = 'Asia/Kamchatka';
    $request->hrisLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-23T01:10:31.769Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->location->updateHrisLocation($request);

    if ($response->hrisLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateHrisLocationRequest](../../Models/Operations/UpdateHrisLocationRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisLocationResponse](../../Models/Operations/UpdateHrisLocationResponse.md)**

