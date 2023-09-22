# User

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdUserIdRequest();
    $request->connectionId = 'maiores';
    $request->id = '179f650b-1e70-47e7-a439-6713bacce072';

    $response = $sdk->user->deleteCrmConnectionIdUserId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdUserIdRequest](../../models/operations/DeleteCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->user->deleteUnifiedUser();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserRequest();
    $request->connectionId = 'similique';
    $request->limit = 7108.35;
    $request->offset = 8436.48;
    $request->order = 'ex';
    $request->query = 'et';
    $request->sort = 'cupiditate';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-22T21:50:43.271Z');

    $response = $sdk->user->getCrmConnectionIdUser($request);

    if ($response->crmUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserRequest](../../models/operations/GetCrmConnectionIdUserRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdUserIdRequest();
    $request->connectionId = 'facere';
    $request->id = '279c10c1-8516-4fd7-8be2-621272628fa5';

    $response = $sdk->user->getCrmConnectionIdUserId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdUserIdRequest](../../models/operations/GetCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->user->getUnifiedUser();

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


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
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->user->getUnifiedUserToken();

    if ($response->getUnifiedUserToken200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'ipsa';
    $request->crmUser->address->address2 = 'ratione';
    $request->crmUser->address->city = 'Kassulkeville';
    $request->crmUser->address->country = 'Libyan Arab Jamahiriya';
    $request->crmUser->address->countryCode = 'IR';
    $request->crmUser->address->postalCode = '84172';
    $request->crmUser->address->region = 'laborum';
    $request->crmUser->address->regionCode = 'autem';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-09T22:56:57.789Z');
    $request->crmUser->currency = 'qui';
    $request->crmUser->department = 'labore';
    $request->crmUser->division = 'rerum';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '157f9bb6-ef72-4a50-871d-99b661a7def1';
    $request->crmUser->imageUrl = 'commodi';
    $request->crmUser->languageLocale = 'voluptatum';
    $request->crmUser->name = 'Cecil Russel';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'sed';
    $request->crmUser->title = 'Ms.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-30T07:01:11.737Z');
    $request->connectionId = 'distinctio';
    $request->id = '4a9850ed-2f4a-41e9-84ae-55140e75726e';

    $response = $sdk->user->patchCrmConnectionIdUserId($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdUserIdRequest](../../models/operations/PatchCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-29T17:16:29.001Z');
    $request->email = 'Oswaldo.Collins16@gmail.com';
    $request->environment = 'natus';
    $request->id = '4192518c-ee41-4c99-9f46-9f6f1cf1a3f0';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Annie Schimmel';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-21T07:53:55.382Z');
    $request->workspaceId = 'laboriosam';
    $request->workspaceIds = [
        'harum',
    ];

    $response = $sdk->user->patchUnifiedUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'commodi';
    $request->crmUser->address->address2 = 'fugit';
    $request->crmUser->address->city = 'Alexandroton';
    $request->crmUser->address->country = 'British Indian Ocean Territory (Chagos Archipelago)';
    $request->crmUser->address->countryCode = 'TH';
    $request->crmUser->address->postalCode = '60345-5583';
    $request->crmUser->address->region = 'in';
    $request->crmUser->address->regionCode = 'odit';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-24T23:03:53.192Z');
    $request->crmUser->currency = 'ipsum';
    $request->crmUser->department = 'illo';
    $request->crmUser->division = 'aperiam';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '3f1a40c0-f3ec-4868-8fd8-ec6fc03128f0';
    $request->crmUser->imageUrl = 'officia';
    $request->crmUser->languageLocale = 'mollitia';
    $request->crmUser->name = 'Erick Thiel Jr.';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'labore';
    $request->crmUser->title = 'Dr.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-22T01:41:56.659Z');
    $request->connectionId = 'voluptate';

    $response = $sdk->user->postCrmConnectionIdUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdUserRequest](../../models/operations/PostCrmConnectionIdUserRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdUserIdRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'soluta';
    $request->crmUser->address->address2 = 'hic';
    $request->crmUser->address->city = 'Itzelberg';
    $request->crmUser->address->country = 'British Indian Ocean Territory (Chagos Archipelago)';
    $request->crmUser->address->countryCode = 'OM';
    $request->crmUser->address->postalCode = '30573-0541';
    $request->crmUser->address->region = 'neque';
    $request->crmUser->address->regionCode = 'quae';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-02T17:23:17.818Z');
    $request->crmUser->currency = 'aliquid';
    $request->crmUser->department = 'maiores';
    $request->crmUser->division = 'voluptatem';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = 'bce55a86-8714-43c9-b905-ff797a5da664';
    $request->crmUser->imageUrl = 'nobis';
    $request->crmUser->languageLocale = 'in';
    $request->crmUser->name = 'Mitchell Kuhn';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'nihil';
    $request->crmUser->title = 'Mrs.';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-01T10:56:34.471Z');
    $request->connectionId = 'culpa';
    $request->id = 'a2832bb6-5862-4d2a-b1f9-b14aa6bdec7f';

    $response = $sdk->user->putCrmConnectionIdUserId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdUserIdRequest](../../models/operations/PutCrmConnectionIdUserIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-13T19:16:05.544Z');
    $request->email = 'Chanel91@gmail.com';
    $request->environment = 'unde';
    $request->id = 'a5dee1ac-d72a-4899-81b5-8fe682e1c2db';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Louis Douglas';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-15T10:58:05.950Z');
    $request->workspaceId = 'deleniti';
    $request->workspaceIds = [
        'sed',
    ];

    $response = $sdk->user->putUnifiedUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUnifiedUserResponse](../../models/operations/PutUnifiedUserResponse.md)**

