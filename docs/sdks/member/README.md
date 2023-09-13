# member

### Available Operations

* [deleteMartechConnectionIdListIdMemberId](#deletemartechconnectionidlistidmemberid) - Remove member from a list
* [getMartechConnectionIdListIdMember](#getmartechconnectionidlistidmember) - List all members in a list
* [getMartechConnectionIdListIdMemberId](#getmartechconnectionidlistidmemberid) - Retrieve a member from a list
* [patchMartechConnectionIdListIdMemberId](#patchmartechconnectionidlistidmemberid) - Update a member in a list
* [postMartechConnectionIdListIdMember](#postmartechconnectionidlistidmember) - Create a member in a list
* [putMartechConnectionIdListIdMemberId](#putmartechconnectionidlistidmemberid) - Update a member in a list

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
    $request->connectionId = 'beatae';
    $request->id = '3ad81242-08ef-4d23-8118-98e73879efbe';
    $request->listId = 'voluptatum';

    $requestSecurity = new DeleteMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->deleteMartechConnectionIdListIdMemberId($request, $requestSecurity);

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
    $request->connectionId = 'rerum';
    $request->limit = 6393.07;
    $request->listId = 'saepe';
    $request->offset = 7308.4;
    $request->order = 'mollitia';
    $request->query = 'libero';
    $request->sort = 'tempore';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-05-21');

    $requestSecurity = new GetMartechConnectionIdListIdMemberSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->getMartechConnectionIdListIdMember($request, $requestSecurity);

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
    $request->connectionId = 'ut';
    $request->id = '536e9035-1bb9-4763-9720-b77a5a5365a7';
    $request->listId = 'unde';

    $requestSecurity = new GetMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->getMartechConnectionIdListIdMemberId($request, $requestSecurity);

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
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2022-10-15');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = '5271f01c-0d36-41fe-98dc-5effb453e908';
    $request->marketingMember->listIds = [
        'sint',
    ];
    $request->marketingMember->name = 'Dr. Everett Kilback';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'soluta',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-02-17');
    $request->connectionId = 'voluptas';
    $request->id = '97bdd9c9-85e4-4373-8a5d-72d9edd785be';
    $request->listId = 'quis';

    $requestSecurity = new PatchMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->patchMartechConnectionIdListIdMemberId($request, $requestSecurity);

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
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2021-08-16');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'afe55297-ba62-481f-84e3-a23394a68cc8';
    $request->marketingMember->listIds = [
        'sit',
    ];
    $request->marketingMember->name = 'Chris Abernathy';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'ducimus',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-12-04');
    $request->connectionId = 'aliquid';
    $request->listId = 'quaerat';

    $requestSecurity = new PostMartechConnectionIdListIdMemberSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->postMartechConnectionIdListIdMember($request, $requestSecurity);

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
    $request->marketingMember->createdAt = DateTime::createFromFormat('Y-m-d', '2022-12-30');
    $request->marketingMember->emails = [
        new MarketingEmail(),
    ];
    $request->marketingMember->id = 'a91fe9d9-6553-4b89-a000-9c6692de7b35';
    $request->marketingMember->listIds = [
        'voluptas',
    ];
    $request->marketingMember->name = 'Miss Irene Beatty';
    $request->marketingMember->raw = new PropertyMarketingMemberRaw();
    $request->marketingMember->tags = [
        'error',
    ];
    $request->marketingMember->updatedAt = DateTime::createFromFormat('Y-m-d', '2021-07-08');
    $request->connectionId = 'eius';
    $request->id = 'ae7b1a5b-908d-44e3-8491-aa35d4a839f0';
    $request->listId = 'ipsum';

    $requestSecurity = new PutMartechConnectionIdListIdMemberIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->member->putMartechConnectionIdListIdMemberId($request, $requestSecurity);

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

