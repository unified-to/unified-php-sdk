# Page


### Available Operations

* [createKmsPage](#createkmspage) - Create a page
* [getKmsPage](#getkmspage) - Retrieve a page
* [listKmsPages](#listkmspages) - List all pages
* [patchKmsPage](#patchkmspage) - Update a page
* [removeKmsPage](#removekmspage) - Remove a page
* [updateKmsPage](#updatekmspage) - Update a page

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

    $response = $sdk->page->createKmsPage($request);

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

    $response = $sdk->page->getKmsPage($request);

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
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->spaceId = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-01T15:54:02.024Z');;

    $response = $sdk->page->listKmsPages($request);

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

    $response = $sdk->page->patchKmsPage($request);

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

    $response = $sdk->page->removeKmsPage($request);

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

    $response = $sdk->page->updateKmsPage($request);

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

