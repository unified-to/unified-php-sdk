# Collection


### Available Operations

* [createCommerceCollection](#createcommercecollection) - Create a collection
* [getCommerceCollection](#getcommercecollection) - Retrieve a collection
* [listCommerceCollections](#listcommercecollections) - List all collections
* [patchCommerceCollection](#patchcommercecollection) - Update a collection
* [removeCommerceCollection](#removecommercecollection) - Remove a collection
* [updateCommerceCollection](#updatecommercecollection) - Update a collection

## createCommerceCollection

Create a collection

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
        $request = new Operations\CreateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T12:03:57.982Z');
    $request->commerceCollection->description = 'Team-oriented intermediate interface';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'whoever' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-13T10:39:45.495Z');
    $request->connectionId = '<value>';;

    $response = $sdk->collection->createCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest](../../Models/Operations/CreateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceCollectionResponse](../../Models/Operations/CreateCommerceCollectionResponse.md)**


## getCommerceCollection

Retrieve a collection

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
        $request = new Operations\GetCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->collection->getCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest](../../Models/Operations/GetCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceCollectionResponse](../../Models/Operations/GetCommerceCollectionResponse.md)**


## listCommerceCollections

List all collections

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
        $request = new Operations\ListCommerceCollectionsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2972.15;
    $request->offset = 5933.83;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-08T20:40:35.103Z');;

    $response = $sdk->collection->listCommerceCollections($request);

    if ($response->commerceCollections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest](../../Models/Operations/ListCommerceCollectionsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceCollectionsResponse](../../Models/Operations/ListCommerceCollectionsResponse.md)**


## patchCommerceCollection

Update a collection

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
        $request = new Operations\PatchCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T01:30:16.292Z');
    $request->commerceCollection->description = 'Polarised solution-oriented analyzer';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'Cheese' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-29T23:35:48.700Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->collection->patchCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest](../../Models/Operations/PatchCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceCollectionResponse](../../Models/Operations/PatchCommerceCollectionResponse.md)**


## removeCommerceCollection

Remove a collection

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
        $request = new Operations\RemoveCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->collection->removeCommerceCollection($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest](../../Models/Operations/RemoveCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionResponse](../../Models/Operations/RemoveCommerceCollectionResponse.md)**


## updateCommerceCollection

Update a collection

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
        $request = new Operations\UpdateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-30T10:24:18.569Z');
    $request->commerceCollection->description = 'Sharable dynamic solution';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'Modern' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-08T04:19:59.358Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->collection->updateCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest](../../Models/Operations/UpdateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionResponse](../../Models/Operations/UpdateCommerceCollectionResponse.md)**

