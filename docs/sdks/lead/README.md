# lead

### Available Operations

* [deleteCrmConnectionIdLeadId](#deletecrmconnectionidleadid) - Remove a lead
* [getCrmConnectionIdLead](#getcrmconnectionidlead) - List all leads
* [getCrmConnectionIdLeadId](#getcrmconnectionidleadid) - Retrieve a lead
* [patchCrmConnectionIdLeadId](#patchcrmconnectionidleadid) - Update a lead
* [postCrmConnectionIdLead](#postcrmconnectionidlead) - Create a lead
* [putCrmConnectionIdLeadId](#putcrmconnectionidleadid) - Update a lead

## deleteCrmConnectionIdLeadId

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'quam';
    $request->id = '4530e5cc-7c6d-40cb-8fdc-d334b6f623bc';

    $requestSecurity = new DeleteCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->deleteCrmConnectionIdLeadId($request, $requestSecurity);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest](../../models/operations/DeleteCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdSecurity](../../models/operations/DeleteCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdResponse](../../models/operations/DeleteCrmConnectionIdLeadIdResponse.md)**


## getCrmConnectionIdLead

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadRequest();
    $request->connectionId = 'repudiandae';
    $request->limit = 7860.86;
    $request->offset = 6517.42;
    $request->order = 'facilis';
    $request->query = 'nostrum';
    $request->sort = 'alias';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2021-03-02');

    $requestSecurity = new GetCrmConnectionIdLeadSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->getCrmConnectionIdLead($request, $requestSecurity);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest](../../models/operations/GetCrmConnectionIdLeadRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadSecurity](../../models/operations/GetCrmConnectionIdLeadSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadResponse](../../models/operations/GetCrmConnectionIdLeadResponse.md)**


## getCrmConnectionIdLeadId

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'recusandae';
    $request->id = '5e0da8b9-af6a-4d05-886e-7b413cbe2d17';

    $requestSecurity = new GetCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->getCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest](../../models/operations/GetCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdSecurity](../../models/operations/GetCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdResponse](../../models/operations/GetCrmConnectionIdLeadIdResponse.md)**


## patchCrmConnectionIdLeadId

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'ea';
    $request->crmLead->address->address2 = 'assumenda';
    $request->crmLead->address->city = 'Bentonville';
    $request->crmLead->address->country = 'Saint Martin';
    $request->crmLead->address->countryCode = 'EE';
    $request->crmLead->address->postalCode = '82093';
    $request->crmLead->address->region = 'illo';
    $request->crmLead->address->regionCode = 'nulla';
    $request->crmLead->companyId = 'inventore';
    $request->crmLead->contactId = 'in';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d', '2022-12-01');
    $request->crmLead->creatorUserId = 'ad';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '7cbe5ee4-f721-4184-8772-f32e3b49dbe0';
    $request->crmLead->name = 'Billy Franey';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-03-28');
    $request->crmLead->userId = 'fugiat';
    $request->connectionId = 'perspiciatis';
    $request->id = '948d6ede-d477-4680-bc7a-17a82e5e82fd';

    $requestSecurity = new PatchCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->patchCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest](../../models/operations/PatchCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdSecurity](../../models/operations/PatchCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdResponse](../../models/operations/PatchCrmConnectionIdLeadIdResponse.md)**


## postCrmConnectionIdLead

Create a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'consequuntur';
    $request->crmLead->address->address2 = 'praesentium';
    $request->crmLead->address->city = 'Brandon';
    $request->crmLead->address->country = 'Andorra';
    $request->crmLead->address->countryCode = 'GD';
    $request->crmLead->address->postalCode = '64851';
    $request->crmLead->address->region = 'ratione';
    $request->crmLead->address->regionCode = 'omnis';
    $request->crmLead->companyId = 'qui';
    $request->crmLead->contactId = 'dolorum';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d', '2022-06-13');
    $request->crmLead->creatorUserId = 'quaerat';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = 'cb183500-8f46-41ce-93e9-14498a9ba460';
    $request->crmLead->name = 'Ismael Streich';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-03-30');
    $request->crmLead->userId = 'veritatis';
    $request->connectionId = 'doloremque';

    $requestSecurity = new PostCrmConnectionIdLeadSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->postCrmConnectionIdLead($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest](../../models/operations/PostCrmConnectionIdLeadRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadSecurity](../../models/operations/PostCrmConnectionIdLeadSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadResponse](../../models/operations/PostCrmConnectionIdLeadResponse.md)**


## putCrmConnectionIdLeadId

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'porro';
    $request->crmLead->address->address2 = 'adipisci';
    $request->crmLead->address->city = 'Reedfurt';
    $request->crmLead->address->country = 'Norfolk Island';
    $request->crmLead->address->countryCode = 'MT';
    $request->crmLead->address->postalCode = '51626';
    $request->crmLead->address->region = 'fugiat';
    $request->crmLead->address->regionCode = 'sint';
    $request->crmLead->companyId = 'aliquid';
    $request->crmLead->contactId = 'odit';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d', '2022-02-19');
    $request->crmLead->creatorUserId = 'amet';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = 'caffc198-eea4-4452-b92b-cd440ea98bec';
    $request->crmLead->name = 'Dexter Bashirian';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-02-18');
    $request->crmLead->userId = 'necessitatibus';
    $request->connectionId = 'perferendis';
    $request->id = 'd56d73b0-0550-43e8-9c62-6ff77c65675f';

    $requestSecurity = new PutCrmConnectionIdLeadIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->lead->putCrmConnectionIdLeadId($request, $requestSecurity);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest](../../models/operations/PutCrmConnectionIdLeadIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdSecurity](../../models/operations/PutCrmConnectionIdLeadIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdResponse](../../models/operations/PutCrmConnectionIdLeadIdResponse.md)**

