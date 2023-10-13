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
    $request->marketingList->createdAt = 'Architect responsive';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'EXE';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-26T18:05:38.910Z');
    $request->connectionId = 'often iusto during';

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
    $request->connectionId = 'Franklin Bicycle Victoria';
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
    $request->connectionId = 'DeKalb magenta black';
    $request->limit = 9030.29;
    $request->offset = 5480.58;
    $request->order = 'knife alarm evolve';
    $request->query = 'Account';
    $request->sort = 'gold';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-20T04:13:08.935Z');

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
    $request->marketingList->createdAt = 'Operations Liaison';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'Buckinghamshire Montana Health';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-21T05:37:31.198Z');
    $request->connectionId = 'hunker';
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
    $request->connectionId = 'misty';
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
    $request->marketingList->createdAt = 'Secured Kia Stroman';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'Bentley Gasoline';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-11T21:33:05.389Z');
    $request->connectionId = 'Roanoke navigate';
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

