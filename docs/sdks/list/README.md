# list

### Available Operations

* [deleteMartechConnectionIdListId](#deletemartechconnectionidlistid) - Remove a list
* [getMartechConnectionIdList](#getmartechconnectionidlist) - List all lists
* [getMartechConnectionIdListId](#getmartechconnectionidlistid) - Retrieve a list
* [patchMartechConnectionIdListId](#patchmartechconnectionidlistid) - Update a list
* [postMartechConnectionIdList](#postmartechconnectionidlist) - Create a list
* [putMartechConnectionIdListId](#putmartechconnectionidlistid) - Update a list

## deleteMartechConnectionIdListId

Remove a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdRequest();
    $request->connectionId = 'nostrum';
    $request->id = 'b70e3e4c-fcc6-4a91-ac52-624d00014ef4';

    $requestSecurity = new DeleteMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->deleteMartechConnectionIdListId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdRequest](../../models/operations/DeleteMartechConnectionIdListIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdSecurity](../../models/operations/DeleteMartechConnectionIdListIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdResponse](../../models/operations/DeleteMartechConnectionIdListIdResponse.md)**


## getMartechConnectionIdList

List all lists

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListRequest;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListRequest();
    $request->connectionId = 'minima';
    $request->limit = 7743.39;
    $request->offset = 8885.73;
    $request->order = 'animi';
    $request->query = 'dicta';
    $request->sort = 'vitae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-30T16:50:43.702Z');

    $requestSecurity = new GetMartechConnectionIdListSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->getMartechConnectionIdList($request, $requestSecurity);

    if ($response->marketingLists !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListRequest](../../models/operations/GetMartechConnectionIdListRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListSecurity](../../models/operations/GetMartechConnectionIdListSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListResponse](../../models/operations/GetMartechConnectionIdListResponse.md)**


## getMartechConnectionIdListId

Retrieve a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdRequest();
    $request->connectionId = 'minima';
    $request->id = '3ebb6587-f340-4414-85b9-acee400ae9f9';

    $requestSecurity = new GetMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->getMartechConnectionIdListId($request, $requestSecurity);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdRequest](../../models/operations/GetMartechConnectionIdListIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdSecurity](../../models/operations/GetMartechConnectionIdListIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdResponse](../../models/operations/GetMartechConnectionIdListIdResponse.md)**


## patchMartechConnectionIdListId

Update a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'magni';
    $request->marketingList->id = 'caf1b025-f1d1-4471-8c6f-a2fad0c06c5d';
    $request->marketingList->name = 'Jorge Hackett';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-05-25T06:53:51.738Z');
    $request->connectionId = 'nulla';
    $request->id = '14fc43b7-0bca-488f-a70c-43351c3dd1eb';

    $requestSecurity = new PatchMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->patchMartechConnectionIdListId($request, $requestSecurity);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdRequest](../../models/operations/PatchMartechConnectionIdListIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdSecurity](../../models/operations/PatchMartechConnectionIdListIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdResponse](../../models/operations/PatchMartechConnectionIdListIdResponse.md)**


## postMartechConnectionIdList

Create a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostMartechConnectionIdListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'deleniti';
    $request->marketingList->id = 'f7f75f4f-23f1-4c0a-986c-3ae7d7b67fee';
    $request->marketingList->name = 'Mrs. Floyd Torphy';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-19T04:08:33.771Z');
    $request->connectionId = 'exercitationem';

    $requestSecurity = new PostMartechConnectionIdListSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->postMartechConnectionIdList($request, $requestSecurity);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListRequest](../../models/operations/PostMartechConnectionIdListRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListSecurity](../../models/operations/PostMartechConnectionIdListSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListResponse](../../models/operations/PostMartechConnectionIdListResponse.md)**


## putMartechConnectionIdListId

Update a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'nam';
    $request->marketingList->id = '1dbeceff-7c4b-4156-a927-8275eea76817';
    $request->marketingList->name = 'Mrs. Katie Lang';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-02T12:03:24.577Z');
    $request->connectionId = 'perspiciatis';
    $request->id = '9b7956c0-b0fa-40bb-a0a4-0e7c4ae64064';

    $requestSecurity = new PutMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->list->putMartechConnectionIdListId($request, $requestSecurity);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdRequest](../../models/operations/PutMartechConnectionIdListIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdSecurity](../../models/operations/PutMartechConnectionIdListIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdResponse](../../models/operations/PutMartechConnectionIdListIdResponse.md)**

