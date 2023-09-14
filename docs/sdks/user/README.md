# user

### Available Operations

* [deleteCrmConnectionIdUserId](#deletecrmconnectioniduserid) - Remove a user
* [deleteUnifiedUser](#deleteunifieduser) - Delete your user object
* [getCrmConnectionIdUser](#getcrmconnectioniduser) - List all users
* [getCrmConnectionIdUserId](#getcrmconnectioniduserid) - Retrieve a user
* [getUnifiedUser](#getunifieduser) - Retrieve your user object
* [getUnifiedUserToken](#getunifiedusertoken) - Retrieve your user token
* [patchCrmConnectionIdUserId](#patchcrmconnectioniduserid) - Update a user
* [patchUnifiedUser](#patchunifieduser) - Updates your user object
* [postCrmConnectionIdUser](#postcrmconnectioniduser) - Create a user
* [putCrmConnectionIdUserId](#putcrmconnectioniduserid) - Update a user
* [putUnifiedUser](#putunifieduser) - Updates your user object

## deleteCrmConnectionIdUserId

Remove a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdUserIdRequest();
    $request->connectionId = 'molestiae';
    $request->id = 'd1ea0e79-fa9b-4be5-b179-f650b1e707e7';

    $requestSecurity = new DeleteCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->deleteCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest](../../models/operations/DeleteCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdSecurity](../../models/operations/DeleteCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdResponse](../../models/operations/DeleteCrmConnectionIdUserIdResponse.md)**


## deleteUnifiedUser

Delete your user object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new DeleteUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->deleteUnifiedUser($requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity](../../models/operations/DeleteUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUnifiedUserResponse](../../models/operations/DeleteUnifiedUserResponse.md)**


## getCrmConnectionIdUser

List all users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserRequest();
    $request->connectionId = 'officiis';
    $request->limit = 2951.07;
    $request->offset = 2054.86;
    $request->order = 'molestias';
    $request->query = 'ea';
    $request->sort = 'odio';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-02T07:59:57.149Z');

    $requestSecurity = new GetCrmConnectionIdUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->getCrmConnectionIdUser($request, $requestSecurity);

    if ($response->crmUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest](../../models/operations/GetCrmConnectionIdUserRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserSecurity](../../models/operations/GetCrmConnectionIdUserSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserResponse](../../models/operations/GetCrmConnectionIdUserResponse.md)**


## getCrmConnectionIdUserId

Retrieve a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserIdRequest();
    $request->connectionId = 'soluta';
    $request->id = 'acce072a-bd61-4918-9279-c10c18516fd7';

    $requestSecurity = new GetCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->getCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest](../../models/operations/GetCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdSecurity](../../models/operations/GetCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdResponse](../../models/operations/GetCrmConnectionIdUserIdResponse.md)**


## getUnifiedUser

Retrieve your user object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new GetUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->getUnifiedUser($requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity](../../models/operations/GetUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedUserResponse](../../models/operations/GetUnifiedUserResponse.md)**


## getUnifiedUserToken

Retrieve your user token

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new GetUnifiedUserTokenSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->getUnifiedUserToken($requestSecurity);

    if ($response->getUnifiedUserToken200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity](../../models/operations/GetUnifiedUserTokenSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedUserTokenResponse](../../models/operations/GetUnifiedUserTokenResponse.md)**


## patchCrmConnectionIdUserId

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'praesentium';
    $request->crmUser->address->address2 = 'rerum';
    $request->crmUser->address->city = 'Cary';
    $request->crmUser->address->country = 'Isle of Man';
    $request->crmUser->address->countryCode = 'BZ';
    $request->crmUser->address->postalCode = '14141';
    $request->crmUser->address->region = 'quos';
    $request->crmUser->address->regionCode = 'doloribus';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-18T22:44:44.080Z');
    $request->crmUser->currency = 'ipsa';
    $request->crmUser->department = 'ratione';
    $request->crmUser->division = 'natus';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '62867e72-b3a6-4502-8b15-7f9bb6ef72a5';
    $request->crmUser->imageUrl = 'ipsa';
    $request->crmUser->languageLocale = 'voluptatum';
    $request->crmUser->name = 'Ashley Strosin';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'nam';
    $request->crmUser->title = 'Mrs.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-29T10:12:08.777Z');
    $request->connectionId = 'officia';
    $request->id = '7def168b-6ccb-4282-ab4a-9850ed2f4a1e';

    $requestSecurity = new PatchCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->patchCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest](../../models/operations/PatchCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdSecurity](../../models/operations/PatchCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdResponse](../../models/operations/PatchCrmConnectionIdUserIdResponse.md)**


## patchUnifiedUser

Only the name field is updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;
use \Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-06-26T19:05:17.063Z');
    $request->email = 'Markus.Von@gmail.com';
    $request->environment = 'inventore';
    $request->id = '40e75726-e003-4c2f-8294-192518cee41c';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Marshall Mraz';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-31T04:37:26.610Z');
    $request->workspaceId = 'delectus';
    $request->workspaceIds = [
        'eum',
    ];

    $requestSecurity = new PatchUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->patchUnifiedUser($request, $requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md)                                                 | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity](../../models/operations/PatchUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedUserResponse](../../models/operations/PatchUnifiedUserResponse.md)**


## postCrmConnectionIdUser

Create a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'delectus';
    $request->crmUser->address->address2 = 'beatae';
    $request->crmUser->address->city = 'Williamsonland';
    $request->crmUser->address->country = 'Palau';
    $request->crmUser->address->countryCode = 'DM';
    $request->crmUser->address->postalCode = '01173-4693';
    $request->crmUser->address->region = 'harum';
    $request->crmUser->address->regionCode = 'commodi';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-07T23:47:24.516Z');
    $request->crmUser->currency = 'voluptatem';
    $request->crmUser->department = 'ab';
    $request->crmUser->division = 'sunt';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = 'eba05798-8c67-420c-b103-f1a40c0f3ec8';
    $request->crmUser->imageUrl = 'aliquid';
    $request->crmUser->languageLocale = 'blanditiis';
    $request->crmUser->name = 'Santos Swaniawski';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'nobis';
    $request->crmUser->title = 'Ms.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-20T15:00:31.441Z');
    $request->connectionId = 'consequatur';

    $requestSecurity = new PostCrmConnectionIdUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->postCrmConnectionIdUser($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest](../../models/operations/PostCrmConnectionIdUserRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserSecurity](../../models/operations/PostCrmConnectionIdUserSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserResponse](../../models/operations/PostCrmConnectionIdUserResponse.md)**


## putCrmConnectionIdUserId

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'consectetur';
    $request->crmUser->address->address2 = 'illo';
    $request->crmUser->address->city = 'New Westleytown';
    $request->crmUser->address->country = 'New Zealand';
    $request->crmUser->address->countryCode = 'NF';
    $request->crmUser->address->postalCode = '88900-2876';
    $request->crmUser->address->region = 'voluptate';
    $request->crmUser->address->regionCode = 'soluta';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-05T11:15:25.411Z');
    $request->crmUser->currency = 'voluptate';
    $request->crmUser->department = 'neque';
    $request->crmUser->division = 'explicabo';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = 'be509c50-8713-41f0-af0b-ce55a8687143';
    $request->crmUser->imageUrl = 'quisquam';
    $request->crmUser->languageLocale = 'iste';
    $request->crmUser->name = 'Sheryl Batz';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'asperiores';
    $request->crmUser->title = 'Ms.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-11T05:46:17.082Z');
    $request->connectionId = 'animi';
    $request->id = '5da664b7-e778-4a74-baaa-2832bb65862d';

    $requestSecurity = new PutCrmConnectionIdUserIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->putCrmConnectionIdUserId($request, $requestSecurity);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest](../../models/operations/PutCrmConnectionIdUserIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdSecurity](../../models/operations/PutCrmConnectionIdUserIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdResponse](../../models/operations/PutCrmConnectionIdUserIdResponse.md)**


## putUnifiedUser

Only the name field is updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;
use \Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-27T09:20:39.988Z');
    $request->email = 'Arnold_Wyman@gmail.com';
    $request->environment = 'veritatis';
    $request->id = '4aa6bdec-7f44-4423-ae9a-5dee1acd72a8';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Miss Andy Lehner';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-08T16:00:16.238Z');
    $request->workspaceId = 'repudiandae';
    $request->workspaceIds = [
        'ex',
    ];

    $requestSecurity = new PutUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->user->putUnifiedUser($request, $requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md)                                             | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity](../../models/operations/PutUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUnifiedUserResponse](../../models/operations/PutUnifiedUserResponse.md)**

