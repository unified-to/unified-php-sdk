# Location


### Available Operations

* [createCommerceLocation](#createcommercelocation) - Create a location
* [getCommerceLocation](#getcommercelocation) - Retrieve a location
* [listCommerceLocations](#listcommercelocations) - List all locations
* [patchCommerceLocation](#patchcommercelocation) - Update a location
* [removeCommerceLocation](#removecommercelocation) - Remove a location
* [updateCommerceLocation](#updatecommercelocation) - Update a location

## createCommerceLocation

Create a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Rock' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-13T08:13:54.098Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->createCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationSecurity](../../Models/Operations/CreateCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**


## getCommerceLocation

Retrieve a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->getCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCommerceLocationSecurity](../../Models/Operations/GetCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**


## listCommerceLocations

List all locations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceLocationsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2087.22;
    $request->offset = 1166.59;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T14:52:37.550Z');;

    $requestSecurity = new Operations\ListCommerceLocationsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->listCommerceLocations($request, $requestSecurity);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsSecurity](../../Models/Operations/ListCommerceLocationsSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**


## patchCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Syrian' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-27T18:21:44.446Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->patchCommerceLocation($request, $requestSecurity);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationSecurity](../../Models/Operations/PatchCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**


## removeCommerceLocation

Remove a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->removeCommerceLocation($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationSecurity](../../Models/Operations/RemoveCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**


## updateCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Street' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-09T05:57:43.241Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->location->updateCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationSecurity](../../Models/Operations/UpdateCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**

