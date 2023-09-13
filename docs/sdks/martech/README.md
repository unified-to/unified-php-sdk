# martech

### Available Operations

* [deleteMartechConnectionIdListId](#deletemartechconnectionidlistid) - Remove a list
* [deleteMartechConnectionIdListIdMemberId](#deletemartechconnectionidlistidmemberid) - Remove member from a list
* [getMartechConnectionIdList](#getmartechconnectionidlist) - List all lists
* [getMartechConnectionIdListId](#getmartechconnectionidlistid) - Retrieve a list
* [getMartechConnectionIdListIdMember](#getmartechconnectionidlistidmember) - List all members in a list
* [getMartechConnectionIdListIdMemberId](#getmartechconnectionidlistidmemberid) - Retrieve a member from a list
* [patchMartechConnectionIdListId](#patchmartechconnectionidlistid) - Update a list
* [patchMartechConnectionIdListIdMemberId](#patchmartechconnectionidlistidmemberid) - Update a member in a list
* [postMartechConnectionIdList](#postmartechconnectionidlist) - Create a list
* [postMartechConnectionIdListIdMember](#postmartechconnectionidlistidmember) - Create a member in a list
* [putMartechConnectionIdListId](#putmartechconnectionidlistid) - Update a list
* [putMartechConnectionIdListIdMemberId](#putmartechconnectionidlistidmemberid) - Update a member in a list

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
    $request->connectionId = 'nobis';
    $request->id = '01a07c08-fd39-421c-a579-30d6f093a3ef';

    $requestSecurity = new DeleteMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->deleteMartechConnectionIdListId($request, $requestSecurity);

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


## deleteMartechConnectionIdListIdMemberId

Remove member from a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'dolorum';
    $request->id = '46d366df-a101-41a0-91b3-ec8b53862de1';
    $request->listId = 'fuga';

    $requestSecurity = new DeleteMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->deleteMartechConnectionIdListIdMemberId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                           | Type                                                                                                                                                                | Required                                                                                                                                                            | Description                                                                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdRequest](../../models/operations/DeleteMartechConnectionIdListIdMemberIdRequest.md)   | :heavy_check_mark:                                                                                                                                                  | The request object to use for the request.                                                                                                                          |
| `security`                                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdSecurity](../../models/operations/DeleteMartechConnectionIdListIdMemberIdSecurity.md) | :heavy_check_mark:                                                                                                                                                  | The security requirements to use for the request.                                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdResponse](../../models/operations/DeleteMartechConnectionIdListIdMemberIdResponse.md)**


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
    $request->connectionId = 'molestias';
    $request->limit = 8706.71;
    $request->offset = 1150.28;
    $request->order = 'aliquam';
    $request->query = 'asperiores';
    $request->sort = 'debitis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-11-06');

    $requestSecurity = new GetMartechConnectionIdListSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->getMartechConnectionIdList($request, $requestSecurity);

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
    $request->connectionId = 'voluptates';
    $request->id = '521f9030-3dfc-4338-b97f-ffa6d1d32090';

    $requestSecurity = new GetMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->getMartechConnectionIdListId($request, $requestSecurity);

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


## getMartechConnectionIdListIdMember

List all members in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberRequest;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberRequest();
    $request->connectionId = 'doloribus';
    $request->limit = 7770.83;
    $request->listId = 'quasi';
    $request->offset = 3568.47;
    $request->order = 'reprehenderit';
    $request->query = 'mollitia';
    $request->sort = 'cumque';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2021-01-08');

    $requestSecurity = new GetMartechConnectionIdListIdMemberSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->getMartechConnectionIdListIdMember($request, $requestSecurity);

    if ($response->marketingMembers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberRequest](../../models/operations/GetMartechConnectionIdListIdMemberRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberSecurity](../../models/operations/GetMartechConnectionIdListIdMemberSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberResponse](../../models/operations/GetMartechConnectionIdListIdMemberResponse.md)**


## getMartechConnectionIdListIdMemberId

Retrieve a member from a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'accusamus';
    $request->id = '1961ce9b-e41c-4869-9d7d-9719d07b200a';
    $request->listId = 'corporis';

    $requestSecurity = new GetMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->getMartechConnectionIdListIdMemberId($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdRequest](../../models/operations/GetMartechConnectionIdListIdMemberIdRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdSecurity](../../models/operations/GetMartechConnectionIdListIdMemberIdSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdResponse](../../models/operations/GetMartechConnectionIdListIdMemberIdResponse.md)**


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
    $request->marketingList->createdAt = 'praesentium';
    $request->marketingList->id = 'ffd2967d-f8fd-4882-a8e6-0be620cd9c5a';
    $request->marketingList->name = 'Mrs. Owen Spencer';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-07-18');
    $request->connectionId = 'corporis';
    $request->id = '2512beae-1d87-4ecc-9fdc-ea8e7a883116';

    $requestSecurity = new PatchMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->patchMartechConnectionIdListId($request, $requestSecurity);

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


## patchMartechConnectionIdListIdMemberId

Update a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2022-10-24');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'cda6d77c-1d86-4066-a37d-4227866db8a7';
    $request->marketingMember->listIds = [
        'labore',
    ];
    $request->marketingMember->name = 'Stewart Feeney';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'incidunt',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-11-25');
    $request->connectionId = 'beatae';
    $request->id = 'cc75e4f0-c004-4b5b-b758-cc94562f0069';
    $request->listId = 'ea';

    $requestSecurity = new PatchMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->patchMartechConnectionIdListIdMemberId($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdRequest](../../models/operations/PatchMartechConnectionIdListIdMemberIdRequest.md)   | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |
| `security`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdSecurity](../../models/operations/PatchMartechConnectionIdListIdMemberIdSecurity.md) | :heavy_check_mark:                                                                                                                                                | The security requirements to use for the request.                                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdResponse](../../models/operations/PatchMartechConnectionIdListIdMemberIdResponse.md)**


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
    $request->marketingList->createdAt = 'rem';
    $request->marketingList->id = '5fcd1a17-3d84-4bbe-a4f2-9834afb0735c';
    $request->marketingList->name = 'Lester Dach';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-02-17');
    $request->connectionId = 'est';

    $requestSecurity = new PostMartechConnectionIdListSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->postMartechConnectionIdList($request, $requestSecurity);

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


## postMartechConnectionIdListIdMember

Create a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostMartechConnectionIdListIdMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2022-05-25');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'aaa1e169-156f-47d2-ae20-9505bf03a93e';
    $request->marketingMember->listIds = [
        'provident',
    ];
    $request->marketingMember->name = 'Miss Hazel Legros';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'ratione',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-09');
    $request->connectionId = 'nam';
    $request->listId = 'ab';

    $requestSecurity = new PostMartechConnectionIdListIdMemberSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->postMartechConnectionIdListIdMember($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberRequest](../../models/operations/PostMartechConnectionIdListIdMemberRequest.md)   | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |
| `security`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberSecurity](../../models/operations/PostMartechConnectionIdListIdMemberSecurity.md) | :heavy_check_mark:                                                                                                                                          | The security requirements to use for the request.                                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberResponse](../../models/operations/PostMartechConnectionIdListIdMemberResponse.md)**


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
    $request->marketingList->createdAt = 'ipsa';
    $request->marketingList->id = '789032ac-3331-472e-add7-9ec74ba7e88d';
    $request->marketingList->name = 'Rudolph Erdman';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-10-05');
    $request->connectionId = 'eligendi';
    $request->id = 'cc341c86-5734-474f-8a74-0fb4ab441c3a';

    $requestSecurity = new PutMartechConnectionIdListIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->putMartechConnectionIdListId($request, $requestSecurity);

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


## putMartechConnectionIdListIdMemberId

Update a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-05');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'e763995d-808b-4be7-9445-5ebc550a1c42';
    $request->marketingMember->listIds = [
        'nisi',
    ];
    $request->marketingMember->name = 'Herman McDermott';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'dolor',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-08-04');
    $request->connectionId = 'asperiores';
    $request->id = 'dcc13558-2c1b-4855-a889-d9ef932e9000';
    $request->listId = 'culpa';

    $requestSecurity = new PutMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->martech->putMartechConnectionIdListIdMemberId($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdRequest](../../models/operations/PutMartechConnectionIdListIdMemberIdRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdSecurity](../../models/operations/PutMartechConnectionIdListIdMemberIdSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdResponse](../../models/operations/PutMartechConnectionIdListIdMemberIdResponse.md)**

