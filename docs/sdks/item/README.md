# Item


### Available Operations

* [createCommerceItem](#createcommerceitem) - Create an item
* [getCommerceItem](#getcommerceitem) - Retrieve an item
* [listCommerceItems](#listcommerceitems) - List all items
* [patchCommerceItem](#patchcommerceitem) - Update an item
* [removeCommerceItem](#removecommerceitem) - Remove an item
* [updateCommerceItem](#updatecommerceitem) - Update an item

## createCommerceItem

Create an item

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
        $request = new Operations\CreateCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-27T05:28:51.414Z');
    $request->commerceItem->description = 'Object-based local intranet';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'Awesome' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-06T06:18:58.093Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->createCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateCommerceItemRequest](../../Models/Operations/CreateCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateCommerceItemSecurity](../../Models/Operations/CreateCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceItemResponse](../../Models/Operations/CreateCommerceItemResponse.md)**


## getCommerceItem

Retrieve an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->getCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCommerceItemRequest](../../Models/Operations/GetCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCommerceItemSecurity](../../Models/Operations/GetCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceItemResponse](../../Models/Operations/GetCommerceItemResponse.md)**


## listCommerceItems

List all items

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceItemsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2553.93;
    $request->offset = 4072.28;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-10T19:08:09.923Z');;

    $requestSecurity = new Operations\ListCommerceItemsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->listCommerceItems($request, $requestSecurity);

    if ($response->commerceItems !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListCommerceItemsRequest](../../Models/Operations/ListCommerceItemsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListCommerceItemsSecurity](../../Models/Operations/ListCommerceItemsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceItemsResponse](../../Models/Operations/ListCommerceItemsResponse.md)**


## patchCommerceItem

Update an item

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
        $request = new Operations\PatchCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-21T03:47:22.544Z');
    $request->commerceItem->description = 'Front-line explicit circuit';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'Dollar' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-26T15:20:36.769Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->patchCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCommerceItemRequest](../../Models/Operations/PatchCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCommerceItemSecurity](../../Models/Operations/PatchCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceItemResponse](../../Models/Operations/PatchCommerceItemResponse.md)**


## removeCommerceItem

Remove an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->removeCommerceItem($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveCommerceItemRequest](../../Models/Operations/RemoveCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveCommerceItemSecurity](../../Models/Operations/RemoveCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceItemResponse](../../Models/Operations/RemoveCommerceItemResponse.md)**


## updateCommerceItem

Update an item

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
        $request = new Operations\UpdateCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-27T01:13:33.758Z');
    $request->commerceItem->description = 'Advanced intangible toolset';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'fuga' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-30T16:38:52.346Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->item->updateCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateCommerceItemRequest](../../Models/Operations/UpdateCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateCommerceItemSecurity](../../Models/Operations/UpdateCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceItemResponse](../../Models/Operations/UpdateCommerceItemResponse.md)**

