# User
(*user*)

### Available Operations

* [createCrmUser](#createcrmuser) - Create a user
* [getCrmUser](#getcrmuser) - Retrieve a user
* [listCrmUsers](#listcrmusers) - List all users
* [patchCrmUser](#patchcrmuser) - Update a user
* [removeCrmUser](#removecrmuser) - Remove a user
* [updateCrmUser](#updatecrmuser) - Update a user

## createCrmUser

Create a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'zero';
    $request->crmUser->address->address2 = 'male';
    $request->crmUser->address->city = 'Darleneboro';
    $request->crmUser->address->country = 'Brazil';
    $request->crmUser->address->countryCode = 'TT';
    $request->crmUser->address->postalCode = '18980';
    $request->crmUser->address->region = 'Minnesota';
    $request->crmUser->address->regionCode = 'navigate';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-27T17:00:55.047Z');
    $request->crmUser->currency = 'Iceland Krona';
    $request->crmUser->department = 'Tandem';
    $request->crmUser->division = 'though';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'Bahrain';
    $request->crmUser->isActive = false;
    $request->crmUser->languageLocale = 'red';
    $request->crmUser->name = 'Northeast';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'America/Bogota';
    $request->crmUser->title = 'Developer';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-30T15:33:19.128Z');
    $request->connectionId = 'Applications';

    $response = $sdk->user->createCrmUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmUserRequest](../../models/operations/CreateCrmUserRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmUserResponse](../../models/operations/CreateCrmUserResponse.md)**


## getCrmUser

Retrieve a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmUserRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmUserRequest();
    $request->connectionId = 'adipisci';
    $request->fields = [
        'connect',
    ];
    $request->id = '<ID>';

    $response = $sdk->user->getCrmUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmUserRequest](../../models/operations/GetCrmUserRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmUserResponse](../../models/operations/GetCrmUserResponse.md)**


## listCrmUsers

List all users

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmUsersRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmUsersRequest();
    $request->connectionId = 'CFA';
    $request->fields = [
        'Costa',
    ];
    $request->limit = 1707.72;
    $request->offset = 6650.22;
    $request->order = 'before';
    $request->query = 'Forward';
    $request->sort = 'scale';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-30T10:56:59.338Z');

    $response = $sdk->user->listCrmUsers($request);

    if ($response->crmUsers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmUsersRequest](../../models/operations/ListCrmUsersRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmUsersResponse](../../models/operations/ListCrmUsersResponse.md)**


## patchCrmUser

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'Demiflux';
    $request->crmUser->address->address2 = 'grey';
    $request->crmUser->address->city = 'Port Nels';
    $request->crmUser->address->country = 'Virgin Islands, British';
    $request->crmUser->address->countryCode = 'CO';
    $request->crmUser->address->postalCode = '56911-4893';
    $request->crmUser->address->region = 'Northwest';
    $request->crmUser->address->regionCode = 'encryption';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-10T19:49:14.486Z');
    $request->crmUser->currency = 'Aruban Guilder';
    $request->crmUser->department = 'Pickup';
    $request->crmUser->division = 'architectures';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'colorfully';
    $request->crmUser->isActive = false;
    $request->crmUser->languageLocale = 'Pizza';
    $request->crmUser->name = 'Northeast';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'America/Guyana';
    $request->crmUser->title = 'Small';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-25T07:59:42.161Z');
    $request->connectionId = 'input';
    $request->id = '<ID>';

    $response = $sdk->user->patchCrmUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmUserRequest](../../models/operations/PatchCrmUserRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmUserResponse](../../models/operations/PatchCrmUserResponse.md)**


## removeCrmUser

Remove a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmUserRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmUserRequest();
    $request->connectionId = 'yellow';
    $request->id = '<ID>';

    $response = $sdk->user->removeCrmUser($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmUserRequest](../../models/operations/RemoveCrmUserRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmUserResponse](../../models/operations/RemoveCrmUserResponse.md)**


## updateCrmUser

Update a user

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmUserRequest;
use \Unified\Unified_to\Models\Shared\CrmUser;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmUserRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmUserRequest();
    $request->crmUser = new CrmUser();
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'benchmark';
    $request->crmUser->address->address2 = 'Rustic';
    $request->crmUser->address->city = 'West Haleighville';
    $request->crmUser->address->country = 'Gabon';
    $request->crmUser->address->countryCode = 'CD';
    $request->crmUser->address->postalCode = '17071-7982';
    $request->crmUser->address->region = 'Sausages';
    $request->crmUser->address->regionCode = 'Communications';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-12T00:23:49.136Z');
    $request->crmUser->currency = 'Guyana Dollar';
    $request->crmUser->department = 'North';
    $request->crmUser->division = 'lighthearted';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'Colorado';
    $request->crmUser->isActive = false;
    $request->crmUser->languageLocale = 'lazy';
    $request->crmUser->name = 'Northeast';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Europe/Athens';
    $request->crmUser->title = 'Northwest';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-12T15:42:51.263Z');
    $request->connectionId = 'technologies';
    $request->id = '<ID>';

    $response = $sdk->user->updateCrmUser($request);

    if ($response->crmUser !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmUserRequest](../../models/operations/UpdateCrmUserRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmUserResponse](../../models/operations/UpdateCrmUserResponse.md)**

