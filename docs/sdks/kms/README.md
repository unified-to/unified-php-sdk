# Kms


### Available Operations

* [createKmsPage](#createkmspage) - Create a page
* [createKmsSpace](#createkmsspace) - Create a space
* [getKmsPage](#getkmspage) - Retrieve a page
* [getKmsSpace](#getkmsspace) - Retrieve a space
* [listKmsPages](#listkmspages) - List all pages
* [listKmsSpaces](#listkmsspaces) - List all spaces
* [patchKmsPage](#patchkmspage) - Update a page
* [patchKmsSpace](#patchkmsspace) - Update a space
* [removeKmsPage](#removekmspage) - Remove a page
* [removeKmsSpace](#removekmsspace) - Remove a space
* [updateKmsPage](#updatekmspage) - Update a page
* [updateKmsSpace](#updatekmsspace) - Update a space

## createKmsPage

Create a page

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
        $request = new Operations\CreateKmsPageRequest();
    $request->kmsPage = new Shared\KmsPage();
    $request->kmsPage->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-23T21:22:47.771Z');
    $request->kmsPage->downloadUrl = '<value>';
    $request->kmsPage->id = '<id>';
    $request->kmsPage->isActive = false;
    $request->kmsPage->parentPageId = '<value>';
    $request->kmsPage->raw = [
        'Oxygen' => '<value>',
    ];
    $request->kmsPage->spaceId = '<value>';
    $request->kmsPage->title = '<value>';
    $request->kmsPage->type = Shared\KmsPageType::Html;
    $request->kmsPage->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-16T07:34:21.155Z');
    $request->kmsPage->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->kms->createKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateKmsPageRequest](../../Models/Operations/CreateKmsPageRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateKmsPageResponse](../../Models/Operations/CreateKmsPageResponse.md)**


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

    $response = $sdk->kms->createKmsSpace($request);

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


## getKmsPage

Retrieve a page

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
        $request = new Operations\GetKmsPageRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->kms->getKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetKmsPageRequest](../../Models/Operations/GetKmsPageRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetKmsPageResponse](../../Models/Operations/GetKmsPageResponse.md)**


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

    $response = $sdk->kms->getKmsSpace($request);

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


## listKmsPages

List all pages

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
        $request = new Operations\ListKmsPagesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 549.23;
    $request->offset = 3993.53;
    $request->order = '<value>';
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->spaceId = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-01T15:54:02.024Z');;

    $response = $sdk->kms->listKmsPages($request);

    if ($response->kmsPages !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListKmsPagesRequest](../../Models/Operations/ListKmsPagesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListKmsPagesResponse](../../Models/Operations/ListKmsPagesResponse.md)**


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
    $request->order = '<value>';
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-18T23:16:42.907Z');;

    $response = $sdk->kms->listKmsSpaces($request);

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


## patchKmsPage

Update a page

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
        $request = new Operations\PatchKmsPageRequest();
    $request->kmsPage = new Shared\KmsPage();
    $request->kmsPage->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-01T10:47:39.805Z');
    $request->kmsPage->downloadUrl = '<value>';
    $request->kmsPage->id = '<id>';
    $request->kmsPage->isActive = false;
    $request->kmsPage->parentPageId = '<value>';
    $request->kmsPage->raw = [
        'core' => '<value>',
    ];
    $request->kmsPage->spaceId = '<value>';
    $request->kmsPage->title = '<value>';
    $request->kmsPage->type = Shared\KmsPageType::Text;
    $request->kmsPage->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-01T10:50:15.719Z');
    $request->kmsPage->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->kms->patchKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchKmsPageRequest](../../Models/Operations/PatchKmsPageRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchKmsPageResponse](../../Models/Operations/PatchKmsPageResponse.md)**


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

    $response = $sdk->kms->patchKmsSpace($request);

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


## removeKmsPage

Remove a page

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
        $request = new Operations\RemoveKmsPageRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->kms->removeKmsPage($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveKmsPageRequest](../../Models/Operations/RemoveKmsPageRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveKmsPageResponse](../../Models/Operations/RemoveKmsPageResponse.md)**


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

    $response = $sdk->kms->removeKmsSpace($request);

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


## updateKmsPage

Update a page

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
        $request = new Operations\UpdateKmsPageRequest();
    $request->kmsPage = new Shared\KmsPage();
    $request->kmsPage->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-28T17:21:15.008Z');
    $request->kmsPage->downloadUrl = '<value>';
    $request->kmsPage->id = '<id>';
    $request->kmsPage->isActive = false;
    $request->kmsPage->parentPageId = '<value>';
    $request->kmsPage->raw = [
        'reef' => '<value>',
    ];
    $request->kmsPage->spaceId = '<value>';
    $request->kmsPage->title = '<value>';
    $request->kmsPage->type = Shared\KmsPageType::Html;
    $request->kmsPage->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-28T03:17:21.699Z');
    $request->kmsPage->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->kms->updateKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateKmsPageRequest](../../Models/Operations/UpdateKmsPageRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateKmsPageResponse](../../Models/Operations/UpdateKmsPageResponse.md)**


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

    $response = $sdk->kms->updateKmsSpace($request);

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

