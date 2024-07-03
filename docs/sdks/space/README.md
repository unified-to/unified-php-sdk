# Space


### Available Operations

* [createKmsSpace](#createkmsspace) - Create a space
* [getKmsSpace](#getkmsspace) - Retrieve a space
* [listKmsSpaces](#listkmsspaces) - List all spaces
* [patchKmsSpace](#patchkmsspace) - Update a space
* [removeKmsSpace](#removekmsspace) - Remove a space
* [updateKmsSpace](#updatekmsspace) - Update a space

## createKmsSpace

Create a space

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
        $request = new Operations\CreateKmsSpaceRequest();
    $request->kmsSpace = new Shared\KmsSpace();
    $request->kmsSpace->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-05T14:15:26.081Z');
    $request->kmsSpace->description = 'Synchronised mission-critical hub';
    $request->kmsSpace->id = '<id>';
    $request->kmsSpace->isActive = false;
    $request->kmsSpace->name = '<value>';
    $request->kmsSpace->parentSpaceId = '<value>';
    $request->kmsSpace->raw = [
        'Bedfordshire' => '<value>',
    ];
    $request->kmsSpace->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-22T08:25:37.527Z');
    $request->kmsSpace->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->space->createKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateKmsSpaceRequest](../../Models/Operations/CreateKmsSpaceRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateKmsSpaceResponse](../../Models/Operations/CreateKmsSpaceResponse.md)**


## getKmsSpace

Retrieve a space

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
        $request = new Operations\GetKmsSpaceRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->space->getKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\GetKmsSpaceRequest](../../Models/Operations/GetKmsSpaceRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetKmsSpaceResponse](../../Models/Operations/GetKmsSpaceResponse.md)**


## listKmsSpaces

List all spaces

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
        $request = new Operations\ListKmsSpacesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9216.91;
    $request->offset = 2110.39;
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-18T23:16:42.907Z');;

    $response = $sdk->space->listKmsSpaces($request);

    if ($response->kmsSpaces !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\ListKmsSpacesRequest](../../Models/Operations/ListKmsSpacesRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListKmsSpacesResponse](../../Models/Operations/ListKmsSpacesResponse.md)**


## patchKmsSpace

Update a space

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
        $request = new Operations\PatchKmsSpaceRequest();
    $request->kmsSpace = new Shared\KmsSpace();
    $request->kmsSpace->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-04T17:16:51.659Z');
    $request->kmsSpace->description = 'Compatible homogeneous info-mediaries';
    $request->kmsSpace->id = '<id>';
    $request->kmsSpace->isActive = false;
    $request->kmsSpace->name = '<value>';
    $request->kmsSpace->parentSpaceId = '<value>';
    $request->kmsSpace->raw = [
        'Hybrid' => '<value>',
    ];
    $request->kmsSpace->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-18T14:48:57.689Z');
    $request->kmsSpace->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->space->patchKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchKmsSpaceRequest](../../Models/Operations/PatchKmsSpaceRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchKmsSpaceResponse](../../Models/Operations/PatchKmsSpaceResponse.md)**


## removeKmsSpace

Remove a space

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
        $request = new Operations\RemoveKmsSpaceRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->space->removeKmsSpace($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveKmsSpaceRequest](../../Models/Operations/RemoveKmsSpaceRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveKmsSpaceResponse](../../Models/Operations/RemoveKmsSpaceResponse.md)**


## updateKmsSpace

Update a space

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
        $request = new Operations\UpdateKmsSpaceRequest();
    $request->kmsSpace = new Shared\KmsSpace();
    $request->kmsSpace->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-28T11:59:07.928Z');
    $request->kmsSpace->description = 'Cross-platform human-resource hierarchy';
    $request->kmsSpace->id = '<id>';
    $request->kmsSpace->isActive = false;
    $request->kmsSpace->name = '<value>';
    $request->kmsSpace->parentSpaceId = '<value>';
    $request->kmsSpace->raw = [
        'brr' => '<value>',
    ];
    $request->kmsSpace->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-12T03:57:22.712Z');
    $request->kmsSpace->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->space->updateKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateKmsSpaceRequest](../../Models/Operations/UpdateKmsSpaceRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateKmsSpaceResponse](../../Models/Operations/UpdateKmsSpaceResponse.md)**

