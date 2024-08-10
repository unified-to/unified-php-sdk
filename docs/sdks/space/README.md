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
    $request = new Operations\CreateKmsSpaceRequest(
        connectionId: '<value>',
        kmsSpace: new Shared\KmsSpace(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-12-05T14:15:26.081Z'),
            description: 'Synchronised mission-critical hub',
            isActive: false,
            parentSpaceId: '<value>',
            raw: [
                'Bedfordshire' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-10-22T08:25:37.527Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->space->createKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateKmsSpaceRequest](../../Models/Operations/CreateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\CreateKmsSpaceResponse](../../Models/Operations/CreateKmsSpaceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getKmsSpace

Retrieve a space

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
    $request = new Operations\GetKmsSpaceRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->space->getKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetKmsSpaceRequest](../../Models/Operations/GetKmsSpaceRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |


### Response

**[?Operations\GetKmsSpaceResponse](../../Models/Operations/GetKmsSpaceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listKmsSpaces

List all spaces

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
    $request = new Operations\ListKmsSpacesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9216.91,
        offset: 2110.39,
        parentId: '<value>',
        query: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-12-18T23:16:42.907Z'),
    );
    $response = $sdk->space->listKmsSpaces($request);

    if ($response->kmsSpaces !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListKmsSpacesRequest](../../Models/Operations/ListKmsSpacesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\ListKmsSpacesResponse](../../Models/Operations/ListKmsSpacesResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchKmsSpace

Update a space

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
    $request = new Operations\PatchKmsSpaceRequest(
        connectionId: '<value>',
        id: '<id>',
        kmsSpace: new Shared\KmsSpace(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-11-04T17:16:51.659Z'),
            description: 'Compatible homogeneous info-mediaries',
            isActive: false,
            parentSpaceId: '<value>',
            raw: [
                'Hybrid' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-06-18T14:48:57.689Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->space->patchKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchKmsSpaceRequest](../../Models/Operations/PatchKmsSpaceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |


### Response

**[?Operations\PatchKmsSpaceResponse](../../Models/Operations/PatchKmsSpaceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeKmsSpace

Remove a space

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
    $request = new Operations\RemoveKmsSpaceRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->space->removeKmsSpace($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveKmsSpaceRequest](../../Models/Operations/RemoveKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\RemoveKmsSpaceResponse](../../Models/Operations/RemoveKmsSpaceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateKmsSpace

Update a space

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
    $request = new Operations\UpdateKmsSpaceRequest(
        connectionId: '<value>',
        id: '<id>',
        kmsSpace: new Shared\KmsSpace(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-05-28T11:59:07.928Z'),
            description: 'Cross-platform human-resource hierarchy',
            isActive: false,
            parentSpaceId: '<value>',
            raw: [
                'brr' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-05-12T03:57:22.712Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->space->updateKmsSpace($request);

    if ($response->kmsSpace !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateKmsSpaceRequest](../../Models/Operations/UpdateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\UpdateKmsSpaceResponse](../../Models/Operations/UpdateKmsSpaceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
