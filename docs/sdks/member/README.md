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

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-29T17:00:36.055Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<id>';
    $request->marketingMember->listIds = [
        '<value>',
    ];
    $request->marketingMember->name = '<value>';
    $request->marketingMember->raw = [
        'deposit' => '<value>',
    ];
    $request->marketingMember->tags = [
        '<value>',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-29T11:20:30.541Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateMartechMemberSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->createMartechMember($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateMartechMemberRequest](../../Models/Operations/CreateMartechMemberRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateMartechMemberSecurity](../../Models/Operations/CreateMartechMemberSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateMartechMemberResponse](../../Models/Operations/CreateMartechMemberResponse.md)**


## getMartechMember

Retrieve a member

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetMartechMemberRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetMartechMemberSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->getMartechMember($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetMartechMemberRequest](../../Models/Operations/GetMartechMemberRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetMartechMemberSecurity](../../Models/Operations/GetMartechMemberSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMartechMemberResponse](../../Models/Operations/GetMartechMemberResponse.md)**


## listMartechMembers

List all members

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListMartechMembersRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 1432.99;
    $request->listId = '<value>';
    $request->offset = 4150.29;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-09T12:30:23.054Z');;

    $requestSecurity = new Operations\ListMartechMembersSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->listMartechMembers($request, $requestSecurity);

    if ($response->marketingMembers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListMartechMembersRequest](../../Models/Operations/ListMartechMembersRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListMartechMembersSecurity](../../Models/Operations/ListMartechMembersSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMartechMembersResponse](../../Models/Operations/ListMartechMembersResponse.md)**


## patchMartechMember

Update a member

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
        $request = new Operations\PatchMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-02T21:05:12.012Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<id>';
    $request->marketingMember->listIds = [
        '<value>',
    ];
    $request->marketingMember->name = '<value>';
    $request->marketingMember->raw = [
        'bumpy' => '<value>',
    ];
    $request->marketingMember->tags = [
        '<value>',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-03T01:03:21.772Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchMartechMemberSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->patchMartechMember($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchMartechMemberRequest](../../Models/Operations/PatchMartechMemberRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchMartechMemberSecurity](../../Models/Operations/PatchMartechMemberSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMartechMemberResponse](../../Models/Operations/PatchMartechMemberResponse.md)**


## removeMartechMember

Remove member

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveMartechMemberRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveMartechMemberSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->removeMartechMember($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveMartechMemberRequest](../../Models/Operations/RemoveMartechMemberRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveMartechMemberSecurity](../../Models/Operations/RemoveMartechMemberSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveMartechMemberResponse](../../Models/Operations/RemoveMartechMemberResponse.md)**


## updateMartechMember

Update a member

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
        $request = new Operations\UpdateMartechMemberRequest();
    $request->marketingMember = new Shared\MarketingMember();
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-24T06:25:19.871Z');
    $request->marketingMember->emails = [
        new Shared\MarketingEmail(),
    ];
    $request->marketingMember->id = '<id>';
    $request->marketingMember->listIds = [
        '<value>',
    ];
    $request->marketingMember->name = '<value>';
    $request->marketingMember->raw = [
        'Berkshire' => '<value>',
    ];
    $request->marketingMember->tags = [
        '<value>',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-23T04:05:41.384Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateMartechMemberSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->member->updateMartechMember($request, $requestSecurity);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateMartechMemberRequest](../../Models/Operations/UpdateMartechMemberRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateMartechMemberSecurity](../../Models/Operations/UpdateMartechMemberSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateMartechMemberResponse](../../Models/Operations/UpdateMartechMemberResponse.md)**

