# Martech
(*martech*)

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdRequest();
    $request->connectionId = 'Minivan';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'Southwest fib';
    $request->id = '<ID>';
    $request->listId = 'pascal';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechConnectionIdListRequest();
    $request->connectionId = 'silver DeKalb';
    $request->limit = 9799.48;
    $request->offset = 4800.63;
    $request->order = 'Bedfordshire';
    $request->query = 'Hip Pass';
    $request->sort = 'since';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-26T19:40:00.770Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechConnectionIdListIdRequest();
    $request->connectionId = 'Jewelery orange';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberRequest();
    $request->connectionId = 'fuchsia economics';
    $request->limit = 3725.92;
    $request->listId = 'Southwest';
    $request->offset = 1114.27;
    $request->order = 'emulation';
    $request->query = 'male male';
    $request->sort = 'Arizona Oklahoma Land';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-19T13:12:48.332Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechConnectionIdListIdMemberIdRequest();
    $request->connectionId = 'male';
    $request->id = '<ID>';
    $request->listId = 'Gasoline Home allot';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'Funk';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'lime Fiat';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-15T20:51:24.192Z');
    $request->connectionId = 'male sheepishly Intelligent';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-21T07:15:04.418Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'silver',
    ];
    $request->marketingMember->name = 'bah';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'Bicycle',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T20:50:12.207Z');
    $request->connectionId = 'Haven Hatchback';
    $request->id = '<ID>';
    $request->listId = 'override Northwest Southwest';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostMartechConnectionIdListRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'synergistic Transexual Steel';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'Virginia whoever Bicycle';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-27T09:56:39.589Z');
    $request->connectionId = 'Hybrid';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostMartechConnectionIdListIdMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T02:49:51.488Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'brr',
    ];
    $request->marketingMember->name = 'Seamless';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'dolorum',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-28T13:24:21.177Z');
    $request->connectionId = 'Granite';
    $request->listId = 'Green Convertible newton';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutMartechConnectionIdListIdRequest();
    $request->marketingList = new MarketingList();
    $request->marketingList->createdAt = 'Underpass initiatives';
    $request->marketingList->id = '<ID>';
    $request->marketingList->name = 'North Progressive Assistant';
    $request->marketingList->raw = new PropertyMarketingListRaw();
    $request->marketingList->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-03T22:31:39.028Z');
    $request->connectionId = 'Security Legacy onto';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutMartechConnectionIdListIdMemberIdRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-24T05:00:50.743Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'male',
    ];
    $request->marketingMember->name = 'reboot person';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'Compatible',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-19T11:51:06.287Z');
    $request->connectionId = 'Ports following';
    $request->id = '<ID>';
    $request->listId = 'Clara Mendelevium';

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

