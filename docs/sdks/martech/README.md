# Martech

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdRequest();
    $request->connectionId = 'maiores';
    $request->id = '093a3efa-46d3-466d-ba10-11a091b3ec8b';

    $response = $sdk->martech->deleteMartechConnectionIdListId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdRequest](../../models/operations/DeleteMartechConnectionIdListIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'exercitationem';
    $request->id = '3862de1a-9d14-4fe7-ae52-1f90303dfc33';
    $request->listId = 'laudantium';

    $response = $sdk->martech->deleteMartechConnectionIdListIdMemberId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                         | Type                                                                                                                                                              | Required                                                                                                                                                          | Description                                                                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteMartechConnectionIdListIdMemberIdRequest](../../models/operations/DeleteMartechConnectionIdListIdMemberIdRequest.md) | :heavy_check_mark:                                                                                                                                                | The request object to use for the request.                                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListRequest();
    $request->connectionId = 'velit';
    $request->limit = 6165.43;
    $request->offset = 4726.55;
    $request->order = 'reiciendis';
    $request->query = 'hic';
    $request->sort = 'hic';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-06T19:00:55.197Z');

    $response = $sdk->martech->getMartechConnectionIdList($request);

    if ($response->marketingLists !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListRequest](../../models/operations/GetMartechConnectionIdListRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdRequest();
    $request->connectionId = 'repellendus';
    $request->id = '1d32090f-c157-4ac9-be19-61ce9be41c86';

    $response = $sdk->martech->getMartechConnectionIdListId($request);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdRequest](../../models/operations/GetMartechConnectionIdListIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberRequest();
    $request->connectionId = 'omnis';
    $request->limit = 8610.4;
    $request->listId = 'facere';
    $request->offset = 4955.97;
    $request->order = 'quibusdam';
    $request->query = 'omnis';
    $request->sort = 'molestiae';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-25T10:06:49.364Z');

    $response = $sdk->martech->getMartechConnectionIdListIdMember($request);

    if ($response->marketingMembers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberRequest](../../models/operations/GetMartechConnectionIdListIdMemberRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'repellendus';
    $request->id = '07b200a5-8ffd-4296-bdf8-fd882a8e60be';
    $request->listId = 'commodi';

    $response = $sdk->martech->getMartechConnectionIdListIdMemberId($request);

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
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetMartechConnectionIdListIdMemberIdRequest](../../models/operations/GetMartechConnectionIdListIdMemberIdRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'eos';
    $request->marketingList->id = '0cd9c5af-dd04-4c37-9251-2beae1d87ecc';
    $request->marketingList->name = 'Lucia Stoltenberg';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-04T00:59:07.070Z');
    $request->connectionId = 'eveniet';
    $request->id = '7a883116-62cd-4a6d-b7c1-d86066237d42';

    $response = $sdk->martech->patchMartechConnectionIdListId($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdRequest](../../models/operations/PatchMartechConnectionIdListIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-11T18:10:33.778Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '866db8a7-49e3-4984-911c-c75e4f0c004b';
    $request->marketingMember->listIds = [
        'minima',
    ];
    $request->marketingMember->name = 'Jean Krajcik';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'minus',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-29T01:16:17.916Z');
    $request->connectionId = 'tempora';
    $request->id = '562f0069-685f-4cd1-a173-d84bbe24f298';
    $request->listId = 'sequi';

    $response = $sdk->martech->patchMartechConnectionIdListIdMemberId($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                       | Type                                                                                                                                                            | Required                                                                                                                                                        | Description                                                                                                                                                     |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchMartechConnectionIdListIdMemberIdRequest](../../models/operations/PatchMartechConnectionIdListIdMemberIdRequest.md) | :heavy_check_mark:                                                                                                                                              | The request object to use for the request.                                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostMartechConnectionIdListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'magnam';
    $request->marketingList->id = 'afb0735c-b628-45d4-a29a-aa1e169156f7';
    $request->marketingList->name = 'Bruce Walter';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-17T23:21:45.062Z');
    $request->connectionId = 'ullam';

    $response = $sdk->martech->postMartechConnectionIdList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListRequest](../../models/operations/PostMartechConnectionIdListRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostMartechConnectionIdListIdMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-23T05:48:43.298Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'bf03a93e-9448-40ca-b7fb-10789032ac33';
    $request->marketingMember->listIds = [
        'nesciunt',
    ];
    $request->marketingMember->name = 'Constance Conroy';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'assumenda',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-02T14:07:38.737Z');
    $request->connectionId = 'provident';
    $request->listId = 'recusandae';

    $response = $sdk->martech->postMartechConnectionIdListIdMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostMartechConnectionIdListIdMemberRequest](../../models/operations/PostMartechConnectionIdListIdMemberRequest.md) | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingList;
use \Unified\Unified_to\Models\Shared\PropertyMarketingListRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'minus';
    $request->marketingList->id = '74ba7e88-ddb3-46fd-9ccc-341c86573474';
    $request->marketingList->name = 'Anthony Nader';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-06T03:29:48.199Z');
    $request->connectionId = 'cum';
    $request->id = '4ab441c3-a09e-4763-995d-808bbe794455';

    $response = $sdk->martech->putMartechConnectionIdListId($request);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdRequest](../../models/operations/PutMartechConnectionIdListIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdRequest;
use \Unified\Unified_to\Models\Shared\MarketingMember;
use \Unified\Unified_to\Models\Shared\MarketingEmail;
use \Unified\Unified_to\Models\Shared\MarketingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyMarketingMemberRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-10-03T01:24:33.712Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'c550a1c4-26b5-49c8-b66f-dcc135582c1b';
    $request->marketingMember->listIds = [
        'quos',
    ];
    $request->marketingMember->name = 'Erin Tillman';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'cupiditate',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-08T05:16:02.091Z');
    $request->connectionId = 'officiis';
    $request->id = 'f932e900-0a13-4ad8-9242-08efd2341189';
    $request->listId = 'rem';

    $response = $sdk->martech->putMartechConnectionIdListIdMemberId($request);

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
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdRequest](../../models/operations/PutMartechConnectionIdListIdMemberIdRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PutMartechConnectionIdListIdMemberIdResponse](../../models/operations/PutMartechConnectionIdListIdMemberIdResponse.md)**

