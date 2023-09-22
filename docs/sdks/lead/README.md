# Lead

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'repellendus';
    $request->id = 'cd334b6f-623b-4cec-ab50-aee5e0da8b9a';

    $response = $sdk->lead->deleteCrmConnectionIdLeadId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdLeadIdRequest](../../models/operations/DeleteCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadRequest();
    $request->connectionId = 'sapiente';
    $request->limit = 3909.16;
    $request->offset = 6623.35;
    $request->order = 'nulla';
    $request->query = 'perferendis';
    $request->sort = 'ullam';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-18T12:51:27.458Z');

    $response = $sdk->lead->getCrmConnectionIdLead($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadRequest](../../models/operations/GetCrmConnectionIdLeadRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdLeadIdRequest();
    $request->connectionId = 'nisi';
    $request->id = 'e7b413cb-e2d1-476d-81c4-3d40f61d1711';

    $response = $sdk->lead->getCrmConnectionIdLeadId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdLeadIdRequest](../../models/operations/GetCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'ad';
    $request->crmLead->address->address2 = 'esse';
    $request->crmLead->address->city = 'Reynoldsside';
    $request->crmLead->address->country = 'Georgia';
    $request->crmLead->address->countryCode = 'US';
    $request->crmLead->address->postalCode = '29410-0520';
    $request->crmLead->address->region = 'nihil';
    $request->crmLead->address->regionCode = 'esse';
    $request->crmLead->companyId = 'quia';
    $request->crmLead->contactId = 'maiores';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-10T17:52:53.328Z');
    $request->crmLead->creatorUserId = 'itaque';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '3b49dbe0-f23b-47b6-9994-8d6eded47768';
    $request->crmLead->name = 'Lela Schiller';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-24T16:35:26.190Z');
    $request->crmLead->userId = 'deserunt';
    $request->connectionId = 'blanditiis';
    $request->id = '2e5e82fd-28d1-4040-a7e9-1392ab44cb18';

    $response = $sdk->lead->patchCrmConnectionIdLeadId($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdLeadIdRequest](../../models/operations/PatchCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'adipisci';
    $request->crmLead->address->address2 = 'nemo';
    $request->crmLead->address->city = 'North Joworth';
    $request->crmLead->address->country = 'Eritrea';
    $request->crmLead->address->countryCode = 'HK';
    $request->crmLead->address->postalCode = '78318';
    $request->crmLead->address->region = 'excepturi';
    $request->crmLead->address->regionCode = 'illo';
    $request->crmLead->companyId = 'tempora';
    $request->crmLead->contactId = 'ut';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-12T20:54:41.368Z');
    $request->crmLead->creatorUserId = 'animi';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '9ba460ad-dfde-4410-837d-aa9182a49d96';
    $request->crmLead->name = 'Beatrice Streich';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-27T00:15:05.903Z');
    $request->crmLead->userId = 'reiciendis';
    $request->connectionId = 'minus';

    $response = $sdk->lead->postCrmConnectionIdLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdLeadRequest](../../models/operations/PostCrmConnectionIdLeadRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdLeadIdRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->active = false;
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'inventore';
    $request->crmLead->address->address2 = 'cupiditate';
    $request->crmLead->address->city = 'Terranceside';
    $request->crmLead->address->country = 'Niue';
    $request->crmLead->address->countryCode = 'ER';
    $request->crmLead->address->postalCode = '31461';
    $request->crmLead->address->region = 'tempore';
    $request->crmLead->address->regionCode = 'maxime';
    $request->crmLead->companyId = 'possimus';
    $request->crmLead->contactId = 'non';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-10T12:43:44.602Z');
    $request->crmLead->creatorUserId = 'saepe';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = 'a98becce-0486-4de0-956d-73b005503e8d';
    $request->crmLead->name = 'Raul Christiansen';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-07T12:18:15.028Z');
    $request->crmLead->userId = 'dignissimos';
    $request->connectionId = 'impedit';
    $request->id = '65675f5b-70e3-4e4c-bcc6-a91ec52624d0';

    $response = $sdk->lead->putCrmConnectionIdLeadId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdRequest](../../models/operations/PutCrmConnectionIdLeadIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdLeadIdResponse](../../models/operations/PutCrmConnectionIdLeadIdResponse.md)**

