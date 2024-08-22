# Page

## Overview

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
    $request = new Operations\CreateKmsPageRequest(
        connectionId: '<value>',
        kmsPage: new Shared\KmsPage(
            downloadUrl: '<value>',
            id: '<id>',
            spaceId: '<value>',
            title: '<value>',
            type: Shared\KmsPageType::Html,
            createdAt: Utils\Utils::parseDateTime('2024-03-19T03:04:03.192Z'),
            isActive: false,
            parentPageId: '<value>',
            raw: [
                'Avon' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-01-16T07:34:21.155Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->page->createKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateKmsPageRequest](../../Models/Operations/CreateKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateKmsPageResponse](../../Models/Operations/CreateKmsPageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getKmsPage

Retrieve a page

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
    $request = new Operations\GetKmsPageRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->page->getKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetKmsPageRequest](../../Models/Operations/GetKmsPageRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetKmsPageResponse](../../Models/Operations/GetKmsPageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listKmsPages

List all pages

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
    $request = new Operations\ListKmsPagesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 549.23,
        offset: 3993.53,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        spaceId: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-09-01T15:54:02.024Z'),
    );
    $response = $sdk->page->listKmsPages($request);

    if ($response->kmsPages !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListKmsPagesRequest](../../Models/Operations/ListKmsPagesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListKmsPagesResponse](../../Models/Operations/ListKmsPagesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchKmsPage

Update a page

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
    $request = new Operations\PatchKmsPageRequest(
        connectionId: '<value>',
        id: '<id>',
        kmsPage: new Shared\KmsPage(
            downloadUrl: '<value>',
            id: '<id>',
            spaceId: '<value>',
            title: '<value>',
            type: Shared\KmsPageType::Text,
            createdAt: Utils\Utils::parseDateTime('2023-03-14T10:32:18.100Z'),
            isActive: false,
            parentPageId: '<value>',
            raw: [
                'Tasty' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-09-01T10:50:15.719Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->page->patchKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchKmsPageRequest](../../Models/Operations/PatchKmsPageRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchKmsPageResponse](../../Models/Operations/PatchKmsPageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeKmsPage

Remove a page

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
    $request = new Operations\RemoveKmsPageRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->page->removeKmsPage($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveKmsPageRequest](../../Models/Operations/RemoveKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveKmsPageResponse](../../Models/Operations/RemoveKmsPageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateKmsPage

Update a page

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
    $request = new Operations\UpdateKmsPageRequest(
        connectionId: '<value>',
        id: '<id>',
        kmsPage: new Shared\KmsPage(
            downloadUrl: '<value>',
            id: '<id>',
            spaceId: '<value>',
            title: '<value>',
            type: Shared\KmsPageType::Text,
            createdAt: Utils\Utils::parseDateTime('2024-12-15T20:24:07.681Z'),
            isActive: false,
            parentPageId: '<value>',
            raw: [
                'female' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-09-28T03:17:21.699Z'),
            userId: '<value>',
        ),
    );
    $response = $sdk->page->updateKmsPage($request);

    if ($response->kmsPage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateKmsPageRequest](../../Models/Operations/UpdateKmsPageRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateKmsPageResponse](../../Models/Operations/UpdateKmsPageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
