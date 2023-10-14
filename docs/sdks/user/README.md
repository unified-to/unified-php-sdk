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
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'await male';
    $request->crmUser->address->address2 = 'Incredible Virginia';
    $request->crmUser->address->city = 'East Providenci';
    $request->crmUser->address->country = 'United States Minor Outlying Islands';
    $request->crmUser->address->countryCode = 'SY';
    $request->crmUser->address->postalCode = '14531';
    $request->crmUser->address->region = 'Tandem though';
    $request->crmUser->address->regionCode = 'Bedfordshire';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-22T22:20:10.918Z');
    $request->crmUser->currency = 'Bermudian Dollar (customarily known as Bermuda Dollar)';
    $request->crmUser->department = 'Ohio male';
    $request->crmUser->division = 'AI North';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'Latin Will the';
    $request->crmUser->languageLocale = 'Central Director';
    $request->crmUser->name = 'Personal compelling similique';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Europe/Athens';
    $request->crmUser->title = 'Assimilated';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-16T01:04:23.014Z');
    $request->connectionId = 'Buckinghamshire';
    $request->fields = [
        'however',
    ];

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
    $request->connectionId = 'Bespoke Dollar';
    $request->fields = [
        'unto',
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
    $request->connectionId = 'careless Costa';
    $request->fields = [
        'olive',
    ];
    $request->limit = 4392.99;
    $request->offset = 7999.12;
    $request->order = 'Southeast orange tesla';
    $request->query = 'San';
    $request->sort = 'Centralized Neptunium';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-13T06:25:33.606Z');

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
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'Bronze composite';
    $request->crmUser->address->address2 = 'katal Industrial Classical';
    $request->crmUser->address->city = 'Bowling Green';
    $request->crmUser->address->country = 'Canada';
    $request->crmUser->address->countryCode = 'IT';
    $request->crmUser->address->postalCode = '93073-3008';
    $request->crmUser->address->region = 'Cab colorfully';
    $request->crmUser->address->regionCode = 'Convertible';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-18T22:39:35.070Z');
    $request->crmUser->currency = 'Danish Krone';
    $request->crmUser->department = 'Sanford';
    $request->crmUser->division = 'meter Bike';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'card equal';
    $request->crmUser->languageLocale = 'Cotton apud';
    $request->crmUser->name = 'male Land fumbling';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Asia/Almaty';
    $request->crmUser->title = 'Borders turquoise';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-05T04:59:37.900Z');
    $request->connectionId = 'Cambridgeshire sit Account';
    $request->fields = [
        'ubiquitous',
    ];
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
    $request->connectionId = 'Southeast';
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
    $request->crmUser->active = false;
    $request->crmUser->address = new PropertyCrmUserAddress();
    $request->crmUser->address->address1 = 'Idaho green';
    $request->crmUser->address->address2 = 'Savings';
    $request->crmUser->address->city = 'Port Camillecester';
    $request->crmUser->address->country = 'Antarctica (the territory South of 60 deg S)';
    $request->crmUser->address->countryCode = 'RE';
    $request->crmUser->address->postalCode = '79822';
    $request->crmUser->address->region = 'Communications Concrete North';
    $request->crmUser->address->regionCode = 'Southwest Hat Northwest';
    $request->crmUser->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-12T15:42:51.263Z');
    $request->crmUser->currency = 'Lempira';
    $request->crmUser->department = 'Bronze quis';
    $request->crmUser->division = 'female less';
    $request->crmUser->emails = [
        new CrmEmail(),
    ];
    $request->crmUser->id = '<ID>';
    $request->crmUser->imageUrl = 'perspiciatis Creative 1080p';
    $request->crmUser->languageLocale = 'Road Movies regulation';
    $request->crmUser->name = 'Northeast Avon';
    $request->crmUser->raw = new PropertyCrmUserRaw();
    $request->crmUser->telephones = [
        new CrmTelephone(),
    ];
    $request->crmUser->timezone = 'Europe/Dublin';
    $request->crmUser->title = 'lavender hmph';
    $request->crmUser->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-19T17:15:40.477Z');
    $request->connectionId = 'Movies Bedford';
    $request->fields = [
        'virtual',
    ];
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

