# Lead
(*lead*)

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
    $request->connectionId = 'Senior azure';
    $request->id = '<ID>';

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
    $request->connectionId = 'Computer Hop';
    $request->limit = 7411.81;
    $request->offset = 9004.32;
    $request->order = 'Operations candela Integration';
    $request->query = 'impactful transform';
    $request->sort = 'Tala defense Southwest';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-29T00:37:32.184Z');

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
    $request->connectionId = 'users Minnesota Bypass';
    $request->id = '<ID>';

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
    $request->crmLead->address->address1 = 'Cambridgeshire';
    $request->crmLead->address->address2 = 'Oriental farad male';
    $request->crmLead->address->city = 'D\'Amorebury';
    $request->crmLead->address->country = 'Reunion';
    $request->crmLead->address->countryCode = 'UY';
    $request->crmLead->address->postalCode = '87017-9001';
    $request->crmLead->address->region = 'Buckinghamshire Electric';
    $request->crmLead->address->regionCode = 'South gee';
    $request->crmLead->companyId = 'Gasoline conglomeration Tennessine';
    $request->crmLead->contactId = 'grow hub';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-09T15:23:12.644Z');
    $request->crmLead->creatorUserId = 'voluptates';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'digital watt';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-25T09:29:16.994Z');
    $request->crmLead->userId = 'withdrawal Producer';
    $request->connectionId = 'Diesel Triathlon/Time';
    $request->id = '<ID>';

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
    $request->crmLead->address->address1 = 'XSS Country knowledge';
    $request->crmLead->address->address2 = 'structure';
    $request->crmLead->address->city = 'Giovaniton';
    $request->crmLead->address->country = 'Ghana';
    $request->crmLead->address->countryCode = 'CO';
    $request->crmLead->address->postalCode = '34495-0585';
    $request->crmLead->address->region = 'Modern';
    $request->crmLead->address->regionCode = 'Diesel';
    $request->crmLead->companyId = 'yuppify';
    $request->crmLead->contactId = 'demanding scratch male';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-07T11:22:05.657Z');
    $request->crmLead->creatorUserId = 'masticate South';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'Savings';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T19:19:26.443Z');
    $request->crmLead->userId = 'port override';
    $request->connectionId = 'mmm indeed';

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
    $request->crmLead->address->address1 = 'Extension';
    $request->crmLead->address->address2 = 'supposing Dorado Assistant';
    $request->crmLead->address->city = 'South Gate';
    $request->crmLead->address->country = 'Reunion';
    $request->crmLead->address->countryCode = 'IS';
    $request->crmLead->address->postalCode = '73732-2192';
    $request->crmLead->address->region = 'JBOD phew';
    $request->crmLead->address->regionCode = 'Southeast Framingham female';
    $request->crmLead->companyId = 'deposit male';
    $request->crmLead->contactId = 'bunch edge';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-03T18:08:02.798Z');
    $request->crmLead->creatorUserId = 'East Panama';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->name = 'SAS Bedfordshire';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-09T08:31:24.216Z');
    $request->crmLead->userId = 'pianist';
    $request->connectionId = 'caricature female';
    $request->id = '<ID>';

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

