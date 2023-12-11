# Member


### Available Operations

* [createMartechMember](#createmartechmember) - Create a member
* [getMartechMember](#getmartechmember) - Retrieve a member
* [listMartechMembers](#listmartechmembers) - List all members
* [patchMartechMember](#patchmartechmember) - Update a member
* [removeMartechMember](#removemartechmember) - Remove member
* [updateMartechMember](#updatemartechmember) - Update a member

## createMartechMember

Create a member

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-29T12:25:04.271Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new Shared\PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-19T04:53:01.271Z');
    $request->connectionId = 'string';;

    $response = $sdk->member->createMartechMember($request);

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest](../../Models/Operations/CreateMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateMartechMemberResponse](../../Models/Operations/CreateMartechMemberResponse.md)**


## getMartechMember

Retrieve a member

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetMartechMemberRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->member->getMartechMember($request);

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
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetMartechMemberRequest](../../Models/Operations/GetMartechMemberRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechMemberResponse](../../Models/Operations/GetMartechMemberResponse.md)**


## listMartechMembers

List all members

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListMartechMembersRequest();
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T03:38:53.799Z');;

    $response = $sdk->member->listMartechMembers($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListMartechMembersRequest](../../Models/Operations/ListMartechMembersRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMartechMembersResponse](../../Models/Operations/ListMartechMembersResponse.md)**


## patchMartechMember

Update a member

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-02T06:23:45.231Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new Shared\PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-21T13:07:32.283Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->member->patchMartechMember($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest](../../Models/Operations/PatchMartechMemberRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechMemberResponse](../../Models/Operations/PatchMartechMemberResponse.md)**


## removeMartechMember

Remove member

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveMartechMemberRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->member->removeMartechMember($request);

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest](../../Models/Operations/RemoveMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse](../../Models/Operations/RemoveMartechMemberResponse.md)**


## updateMartechMember

Update a member

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-24T11:56:04.469Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<ID>';
    $request->marketingMember->listIds = [
        'string',
    ];
    $request->marketingMember->name = 'string';
    $request->marketingMember->raw = new Shared\PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'string',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-20T03:26:40.111Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->member->updateMartechMember($request);

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest](../../Models/Operations/UpdateMartechMemberRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse](../../Models/Operations/UpdateMartechMemberResponse.md)**

