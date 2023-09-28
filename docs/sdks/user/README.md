# User
(*user*)

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
    $request->connectionId = 'Intranet Data';
    $request->id = '<ID>';

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
    $request->connectionId = 'suit Electronic Tampa';
    $request->limit = 2883.34;
    $request->offset = 8886.55;
    $request->order = 'despite';
    $request->query = 'frightfully Fitness';
    $request->sort = 'success servant';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-23T05:53:04.259Z');

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
    $request->connectionId = 'connecting Program';
    $request->id = '<ID>';

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
    $request->crmUser->address->address1 = 'Customer';
    $request->crmUser->address->address2 = 'violet groupware blanditiis';
    $request->crmUser->address->city = 'South Phoebeshire';
    $request->crmUser->address->country = 'Thailand';
    $request->crmUser->address->countryCode = 'NO';
    $request->crmUser->address->postalCode = '30801-4594';
    $request->crmUser->address->region = 'portals Vanadium';
    $request->crmUser->address->regionCode = 'Future';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-04T02:42:28.788Z');
    $request->crmUser->currency = 'Guinea Franc';
    $request->crmUser->department = 'Gloves global rosin';
    $request->crmUser->division = 'Berkshire Europium';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'anti';
    $request->crmUser->languageLocale = 'Avon India';
    $request->crmUser->name = 'Zimbabwe';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Asia/Tokyo';
    $request->crmUser->title = 'Porsche matrix Electric';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-07T11:01:50.491Z');
    $request->connectionId = 'Seaborgium male unto';
    $request->id = '<ID>';

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
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-24T15:25:24.483Z');
    $request->email = 'Emmalee.Quitzon@yahoo.com';
    $request->environment = 'Bicycle';
    $request->id = '<ID>';
    $request->meta = new PropertyUserMeta();
    $request->name = 'vice compressing';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T16:52:20.023Z');
    $request->workspaceId = 'Hybrid methodologies';
    $request->workspaceIds = [
        'Potassium',
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
    $request->crmUser->address->address1 = 'driver East';
    $request->crmUser->address->address2 = 'relationships Computer navigate';
    $request->crmUser->address->city = 'Homestead';
    $request->crmUser->address->country = 'Cayman Islands';
    $request->crmUser->address->countryCode = 'BW';
    $request->crmUser->address->postalCode = '34958';
    $request->crmUser->address->region = 'South';
    $request->crmUser->address->regionCode = 'morph an colossal';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-02T08:27:21.693Z');
    $request->crmUser->currency = 'Cayman Islands Dollar';
    $request->crmUser->department = 'um';
    $request->crmUser->division = 'West sievert generating';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'invoice';
    $request->crmUser->languageLocale = 'Division Accountability radian';
    $request->crmUser->name = 'bypass';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Asia/Kuala_Lumpur';
    $request->crmUser->title = 'Silicon Awesome Industrial';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-14T15:51:58.095Z');
    $request->connectionId = 'Tuna';

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
    $request->crmUser->address->address1 = 'Honduras';
    $request->crmUser->address->address2 = 'Oxygen Libyan Burundi';
    $request->crmUser->address->city = 'North Gertrudefield';
    $request->crmUser->address->country = 'Belgium';
    $request->crmUser->address->countryCode = 'DK';
    $request->crmUser->address->postalCode = '00781';
    $request->crmUser->address->region = 'Wagon';
    $request->crmUser->address->regionCode = 'how overriding';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-13T00:47:15.649Z');
    $request->crmUser->currency = 'Pakistan Rupee';
    $request->crmUser->department = 'Tricycle vaguely';
    $request->crmUser->division = 'Severn bluetooth Argon';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'program wimp Colombia';
    $request->crmUser->languageLocale = 'AGP romance didactic';
    $request->crmUser->name = 'ROI Polarised';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Europe/Bucharest';
    $request->crmUser->title = 'Central';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T21:29:55.600Z');
    $request->connectionId = 'Honda Indiana';
    $request->id = '<ID>';

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
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-31T04:46:29.769Z');
    $request->email = 'Selena59@yahoo.com';
    $request->environment = 'Bedfordshire Lucia';
    $request->id = '<ID>';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Bicycle hacking South';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-15T15:08:26.238Z');
    $request->workspaceId = 'Card defect';
    $request->workspaceIds = [
        'repudiandae',
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

