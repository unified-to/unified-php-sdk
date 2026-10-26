# Class

## Overview

### Available Operations

* [createLmsClass](#createlmsclass) - Create a class
* [getLmsClass](#getlmsclass) - Retrieve a class
* [listLmsClasses](#listlmsclasses) - List all classes
* [patchLmsClass](#patchlmsclass) - Update a class
* [removeLmsClass](#removelmsclass) - Remove a class
* [updateLmsClass](#updatelmsclass) - Update a class

## createLmsClass

Creates a LmsClass. Provide the unified LmsClass fields in the request body; they are mapped to the provider's API. Returns the created LmsClass.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsClass" method="post" path="/lms/{connection_id}/class" example="lms_class" -->
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

$request = new Operations\CreateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Anser sperno decerno.',
        id: '671d80ea-533f-4dc1-8562-4b14534c318f',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Defetiscor aetas acies benevolentia ulterius. Creta bis beneficium canis. Bonus valeo vulgo creator arca peior ceno earum culpa. Tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana.',
                description: 'Esse confido.',
                languages: [
                    'fa',
                    'da',
                ],
                name: 'illo',
                thumbnailUrl: 'https://loremflickr.com/199/1934?lock=4323325966476891',
                type: Shared\LmsMediaType::Video,
                url: 'https://loremflickr.com/487/921?lock=5127962071241632',
            ),
        ],
        metadata: [],
        name: 'virtus',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-08-07T23:09:03.366Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->class->createLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateLmsClassRequest](../../Models/Operations/CreateLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateLmsClassResponse](../../Models/Operations/CreateLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLmsClass

Retrieves a single LmsClass by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsClass" method="get" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\GetLmsClassRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->getLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetLmsClassRequest](../../Models/Operations/GetLmsClassRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetLmsClassResponse](../../Models/Operations/GetLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLmsClasses

Returns a list of LmsClasses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsClasses" method="get" path="/lms/{connection_id}/class" -->
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

$request = new Operations\ListLmsClassesRequest(
    connectionId: '<id>',
);

$response = $sdk->class->listLmsClasses(
    request: $request
);

if ($response->lmsClasses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListLmsClassesRequest](../../Models/Operations/ListLmsClassesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListLmsClassesResponse](../../Models/Operations/ListLmsClassesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLmsClass

Updates the LmsClass identified by `id`. Provide the unified LmsClass fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsClass" method="patch" path="/lms/{connection_id}/class/{id}" example="lms_class" -->
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

$request = new Operations\PatchLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Anser sperno decerno.',
        id: '74a1c1b5-2393-491f-bd7a-2d153b203691',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Defetiscor aetas acies benevolentia ulterius. Creta bis beneficium canis. Bonus valeo vulgo creator arca peior ceno earum culpa. Tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana.',
                description: 'Esse confido.',
                languages: [
                    'fa',
                    'da',
                ],
                name: 'illo',
                thumbnailUrl: 'https://loremflickr.com/199/1934?lock=4323325966476891',
                type: Shared\LmsMediaType::Video,
                url: 'https://loremflickr.com/487/921?lock=5127962071241632',
            ),
        ],
        metadata: [],
        name: 'virtus',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-08-07T23:09:03.380Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->patchLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchLmsClassRequest](../../Models/Operations/PatchLmsClassRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchLmsClassResponse](../../Models/Operations/PatchLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLmsClass

Deletes the LmsClass identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsClass" method="delete" path="/lms/{connection_id}/class/{id}" -->
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

$request = new Operations\RemoveLmsClassRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->removeLmsClass(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveLmsClassRequest](../../Models/Operations/RemoveLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveLmsClassResponse](../../Models/Operations/RemoveLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLmsClass

Updates the LmsClass identified by `id`. Provide the unified LmsClass fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsClass" method="put" path="/lms/{connection_id}/class/{id}" example="lms_class" -->
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

$request = new Operations\UpdateLmsClassRequest(
    lmsClass: new Shared\LmsClass(
        createdAt: Utils\Utils::parseDateTime('2020-02-20T14:48:51.845Z'),
        description: 'Anser sperno decerno.',
        id: '74a1c1b5-2393-491f-bd7a-2d153b203691',
        instructors: [],
        languages: [
            'in',
        ],
        media: [
            new Shared\LmsMedia(
                content: 'Defetiscor aetas acies benevolentia ulterius. Creta bis beneficium canis. Bonus valeo vulgo creator arca peior ceno earum culpa. Tabesco apostolus talis. Ultra accommodo deinde sono culpo arto cruciamentum triduana.',
                description: 'Esse confido.',
                languages: [
                    'fa',
                    'da',
                ],
                name: 'illo',
                thumbnailUrl: 'https://loremflickr.com/199/1934?lock=4323325966476891',
                type: Shared\LmsMediaType::Video,
                url: 'https://loremflickr.com/487/921?lock=5127962071241632',
            ),
        ],
        metadata: [],
        name: 'virtus',
        students: [],
        updatedAt: Utils\Utils::parseDateTime('2025-08-07T23:09:03.380Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->class->updateLmsClass(
    request: $request
);

if ($response->lmsClass !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateLmsClassRequest](../../Models/Operations/UpdateLmsClassRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateLmsClassResponse](../../Models/Operations/UpdateLmsClassResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |