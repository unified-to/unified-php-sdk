# Member

## Overview

### Available Operations

* [createMartechMember](#createmartechmember) - Create a member
* [getMartechMember](#getmartechmember) - Retrieve a member
* [listMartechMembers](#listmartechmembers) - List all members
* [patchMartechMember](#patchmartechmember) - Update a member
* [removeMartechMember](#removemartechmember) - Remove a member
* [updateMartechMember](#updatemartechmember) - Update a member

## createMartechMember

Create a member

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateMartechMemberRequest(
        connectionId: '<value>',
        marketingMember: new Shared\MarketingMember(
            createdAt: Utils\Utils::parseDateTime('2022-07-29T17:00:36.055Z'),
            emails: [
                new Shared\MarketingEmail,
            ],
            id: '<id>',
            listIds: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'deposit' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-08-29T11:20:30.541Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->member->createMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateMartechMemberRequest](../../Models/Operations/CreateMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateMartechMemberResponse](../../Models/Operations/CreateMartechMemberResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getMartechMember

Retrieve a member

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetMartechMemberRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->member->getMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetMartechMemberRequest](../../Models/Operations/GetMartechMemberRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetMartechMemberResponse](../../Models/Operations/GetMartechMemberResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listMartechMembers

List all members

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListMartechMembersRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 1432.99,
        listId: '<value>',
        offset: 4150.29,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-02-09T12:30:23.054Z'),
    );
    $response = $sdk->member->listMartechMembers($request);

    if ($response->marketingMembers !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListMartechMembersRequest](../../Models/Operations/ListMartechMembersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListMartechMembersResponse](../../Models/Operations/ListMartechMembersResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchMartechMember

Update a member

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchMartechMemberRequest(
        connectionId: '<value>',
        id: '<id>',
        marketingMember: new Shared\MarketingMember(
            createdAt: Utils\Utils::parseDateTime('2023-11-02T21:05:12.012Z'),
            emails: [
                new Shared\MarketingEmail,
            ],
            id: '<id>',
            listIds: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'bumpy' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-12-03T01:03:21.772Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->member->patchMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchMartechMemberRequest](../../Models/Operations/PatchMartechMemberRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchMartechMemberResponse](../../Models/Operations/PatchMartechMemberResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeMartechMember

Remove a member

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveMartechMemberRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->member->removeMartechMember($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveMartechMemberRequest](../../Models/Operations/RemoveMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveMartechMemberResponse](../../Models/Operations/RemoveMartechMemberResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateMartechMember

Update a member

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateMartechMemberRequest(
        connectionId: '<value>',
        id: '<id>',
        marketingMember: new Shared\MarketingMember(
            createdAt: Utils\Utils::parseDateTime('2024-04-24T06:25:19.871Z'),
            emails: [
                new Shared\MarketingEmail,
            ],
            id: '<id>',
            listIds: [
                '<value>',
            ],
            name: '<value>',
            raw: [
                'Berkshire' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-04-23T04:05:41.384Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->member->updateMartechMember($request);

    if ($response->marketingMember !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateMartechMemberRequest](../../Models/Operations/UpdateMartechMemberRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateMartechMemberResponse](../../Models/Operations/UpdateMartechMemberResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
