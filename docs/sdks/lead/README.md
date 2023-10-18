# Lead
(*lead*)

### Available Operations

* [createCrmLead](#createcrmlead) - Create a lead
* [getCrmLead](#getcrmlead) - Retrieve a lead
* [listCrmLeads](#listcrmleads) - List all leads
* [patchCrmLead](#patchcrmlead) - Update a lead
* [removeCrmLead](#removecrmlead) - Remove a lead
* [updateCrmLead](#updatecrmlead) - Update a lead

## createCrmLead

Create a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'Designer';
    $request->crmLead->address->address2 = 'Soft';
    $request->crmLead->address->city = 'Hudsontown';
    $request->crmLead->address->country = 'Qatar';
    $request->crmLead->address->countryCode = 'ST';
    $request->crmLead->address->postalCode = '67652-6844';
    $request->crmLead->address->region = 'Uranium';
    $request->crmLead->address->regionCode = 'Gender';
    $request->crmLead->companyId = 'Health';
    $request->crmLead->contactId = 'North';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-10T15:43:57.474Z');
    $request->crmLead->creatorUserId = 'becquerel';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'protest';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->source = 'applications';
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T20:24:32.803Z');
    $request->crmLead->userId = 'Southeast';
    $request->connectionId = 'sievert';

    $response = $sdk->lead->createCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmLeadRequest](../../models/operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmLeadResponse](../../models/operations/CreateCrmLeadResponse.md)**


## getCrmLead

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmLeadRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmLeadRequest();
    $request->connectionId = 'how';
    $request->fields = [
        'Curium',
    ];
    $request->id = '<ID>';

    $response = $sdk->lead->getCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmLeadRequest](../../models/operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmLeadResponse](../../models/operations/GetCrmLeadResponse.md)**


## listCrmLeads

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmLeadsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmLeadsRequest();
    $request->connectionId = 'Implementation';
    $request->fields = [
        'dam',
    ];
    $request->limit = 4734.01;
    $request->offset = 6489.94;
    $request->order = 'Mazda';
    $request->query = 'generous';
    $request->sort = 'Mazda';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-20T02:58:45.696Z');

    $response = $sdk->lead->listCrmLeads($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest](../../models/operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmLeadsResponse](../../models/operations/ListCrmLeadsResponse.md)**


## patchCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'deposit';
    $request->crmLead->address->address2 = 'Bike';
    $request->crmLead->address->city = 'Ezequielberg';
    $request->crmLead->address->country = 'Estonia';
    $request->crmLead->address->countryCode = 'CU';
    $request->crmLead->address->postalCode = '17059-6247';
    $request->crmLead->address->region = 'programming';
    $request->crmLead->address->regionCode = 'array';
    $request->crmLead->companyId = 'Gary';
    $request->crmLead->contactId = 'Lesotho';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-25T06:36:08.198Z');
    $request->crmLead->creatorUserId = 'pascal';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'Lanka';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->source = 'Northeast';
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-22T23:16:58.262Z');
    $request->crmLead->userId = 'Decentralized';
    $request->connectionId = 'gray';
    $request->id = '<ID>';

    $response = $sdk->lead->patchCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmLeadRequest](../../models/operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmLeadResponse](../../models/operations/PatchCrmLeadResponse.md)**


## removeCrmLead

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmLeadRequest();
    $request->connectionId = 'Springs';
    $request->id = '<ID>';

    $response = $sdk->lead->removeCrmLead($request);

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest](../../models/operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse](../../models/operations/RemoveCrmLeadResponse.md)**


## updateCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest;
use \Unified\Unified_to\Models\Shared\CrmLead;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadAddress;
use \Unified\Unified_to\Models\Shared\CrmEmail;
use \Unified\Unified_to\Models\Shared\CrmEmailType;
use \Unified\Unified_to\Models\Shared\PropertyCrmLeadRaw;
use \Unified\Unified_to\Models\Shared\CrmTelephone;
use \Unified\Unified_to\Models\Shared\CrmTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmLeadRequest();
    $request->crmLead = new CrmLead();
    $request->crmLead->address = new PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'Northwest';
    $request->crmLead->address->address2 = 'violation';
    $request->crmLead->address->city = 'Hoffman Estates';
    $request->crmLead->address->country = 'Rwanda';
    $request->crmLead->address->countryCode = 'SN';
    $request->crmLead->address->postalCode = '40022-5652';
    $request->crmLead->address->region = 'silver';
    $request->crmLead->address->regionCode = 'auxiliary';
    $request->crmLead->companyId = 'Product';
    $request->crmLead->contactId = 'usher';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-17T00:15:08.656Z');
    $request->crmLead->creatorUserId = 'Bicycle';
    $request->crmLead->emails = [
        new CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'local';
    $request->crmLead->raw = new PropertyCrmLeadRaw();
    $request->crmLead->source = 'Associate';
    $request->crmLead->telephones = [
        new CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-15T05:31:58.661Z');
    $request->crmLead->userId = 'numquam';
    $request->connectionId = 'Ball';
    $request->id = '<ID>';

    $response = $sdk->lead->updateCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest](../../models/operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse](../../models/operations/UpdateCrmLeadResponse.md)**

