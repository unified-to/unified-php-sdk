# ListT
(*list*)

### Available Operations

* [createMartechList](#createmartechlist) - Create a list
* [getMartechList](#getmartechlist) - Retrieve a list
* [listMartechLists](#listmartechlists) - List all lists
* [patchMartechList](#patchmartechlist) - Update a list
* [removeMartechList](#removemartechlist) - Remove a list
* [updateMartechList](#updatemartechlist) - Update a list

## createMartechList

Create a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateMartechListRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateMartechListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'string';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'string';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-15T11:18:03.715Z');
    $request->connectionId = 'string';

    $response = $sdk->list->createMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateMartechListRequest](../../models/operations/CreateMartechListRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateMartechListResponse](../../models/operations/CreateMartechListResponse.md)**


## getMartechList

Retrieve a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechListRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechListRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->list->getMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetMartechListRequest](../../models/operations/GetMartechListRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechListResponse](../../models/operations/GetMartechListResponse.md)**


## listMartechLists

List all lists

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListMartechListsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListMartechListsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 9665.22;
    $request->offset = 367.94;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-12T06:44:44.684Z');

    $response = $sdk->list->listMartechLists($request);

    if ($response->marketingLists !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListMartechListsRequest](../../models/operations/ListMartechListsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMartechListsResponse](../../models/operations/ListMartechListsResponse.md)**


## patchMartechList

Update a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchMartechListRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchMartechListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'string';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'string';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-07T20:57:43.081Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->list->patchMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchMartechListRequest](../../models/operations/PatchMartechListRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechListResponse](../../models/operations/PatchMartechListResponse.md)**


## removeMartechList

Remove a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveMartechListRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveMartechListRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->list->removeMartechList($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveMartechListRequest](../../models/operations/RemoveMartechListRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveMartechListResponse](../../models/operations/RemoveMartechListResponse.md)**


## updateMartechList

Update a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateMartechListRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateMartechListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'string';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'string';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-02T06:01:18.792Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->list->updateMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateMartechListRequest](../../models/operations/UpdateMartechListRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateMartechListResponse](../../models/operations/UpdateMartechListResponse.md)**

