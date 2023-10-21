# Martech
(*martech*)

### Available Operations

* [createMartechList](#createmartechlist) - Create a list
* [createMartechMember](#createmartechmember) - Create a member in a list
* [getMartechList](#getmartechlist) - Retrieve a list
* [getMartechMember](#getmartechmember) - Retrieve a member from a list
* [listMartechLists](#listmartechlists) - List all lists
* [listMartechMembers](#listmartechmembers) - List all members in a list
* [patchMartechList](#patchmartechlist) - Update a list
* [patchMartechMember](#patchmartechmember) - Update a member in a list
* [removeMartechList](#removemartechlist) - Remove a list
* [removeMartechMember](#removemartechmember) - Remove member from a list
* [updateMartechList](#updatemartechlist) - Update a list
* [updateMartechMember](#updatemartechmember) - Update a member in a list

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

    $response = $sdk->martech->createMartechList($request);

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


## createMartechMember

Create a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateMartechMemberRequest;
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
    $request = new CreateMartechMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-29T12:25:04.271Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-19T04:53:01.271Z');
    $request->connectionId = 'string';
    $request->listId = 'string';

    $response = $sdk->martech->createMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest](../../models/operations/CreateMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateMartechMemberResponse](../../models/operations/CreateMartechMemberResponse.md)**


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

    $response = $sdk->martech->getMartechList($request);

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


## getMartechMember

Retrieve a member from a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetMartechMemberRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetMartechMemberRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';
    $request->listId = 'string';

    $response = $sdk->martech->getMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetMartechMemberRequest](../../models/operations/GetMartechMemberRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechMemberResponse](../../models/operations/GetMartechMemberResponse.md)**


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

    $response = $sdk->martech->listMartechLists($request);

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


## listMartechMembers

List all members in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListMartechMembersRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListMartechMembersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 1432.99;
    $request->listId = 'string';
    $request->offset = 4150.29;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T03:38:53.799Z');

    $response = $sdk->martech->listMartechMembers($request);

    if ($response->marketingMembers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListMartechMembersRequest](../../models/operations/ListMartechMembersRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMartechMembersResponse](../../models/operations/ListMartechMembersResponse.md)**


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

    $response = $sdk->martech->patchMartechList($request);

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


## patchMartechMember

Update a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchMartechMemberRequest;
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
    $request = new PatchMartechMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-02T06:23:45.231Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-21T13:07:32.283Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';
    $request->listId = 'string';

    $response = $sdk->martech->patchMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest](../../models/operations/PatchMartechMemberRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechMemberResponse](../../models/operations/PatchMartechMemberResponse.md)**


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

    $response = $sdk->martech->removeMartechList($request);

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


## removeMartechMember

Remove member from a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveMartechMemberRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';
    $request->listId = 'string';

    $response = $sdk->martech->removeMartechMember($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest](../../models/operations/RemoveMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse](../../models/operations/RemoveMartechMemberResponse.md)**


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

    $response = $sdk->martech->updateMartechList($request);

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


## updateMartechMember

Update a member in a list

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest;
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
    $request = new UpdateMartechMemberRequest();
    $request->marketingMember = new MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-24T11:56:04.469Z');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-20T03:26:40.111Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';
    $request->listId = 'string';

    $response = $sdk->martech->updateMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest](../../models/operations/UpdateMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse](../../models/operations/UpdateMartechMemberResponse.md)**

