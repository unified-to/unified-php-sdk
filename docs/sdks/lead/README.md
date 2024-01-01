# Lead


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'Lindboro';
    $request->crmLead->address->country = 'Saint Barthelemy';
    $request->crmLead->address->countryCode = 'SG';
    $request->crmLead->address->postalCode = '67307-8667';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->companyName = 'Langosh - Fritsch';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-23T15:29:07.093Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-01T18:33:52.670Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmLeadRequest](../../Models/Operations/CreateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmLeadResponse](../../Models/Operations/CreateCrmLeadResponse.md)**


## getCrmLead

Retrieve a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCrmLeadRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmLeadRequest](../../Models/Operations/GetCrmLeadRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmLeadResponse](../../Models/Operations/GetCrmLeadResponse.md)**


## listCrmLeads

List all leads

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCrmLeadsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2895.08;
    $request->offset = 6446.8;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-12T07:27:29.016Z');;

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmLeadsRequest](../../Models/Operations/ListCrmLeadsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmLeadsResponse](../../Models/Operations/ListCrmLeadsResponse.md)**


## patchCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'Caseyberg';
    $request->crmLead->address->country = 'Cote d\'Ivoire';
    $request->crmLead->address->countryCode = 'LK';
    $request->crmLead->address->postalCode = '22291';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->companyName = 'Altenwerth, Lebsack and Wintheiser';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-16T13:33:21.530Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-10T11:36:08.811Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmLeadRequest](../../Models/Operations/PatchCrmLeadRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmLeadResponse](../../Models/Operations/PatchCrmLeadResponse.md)**


## removeCrmLead

Remove a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCrmLeadRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmLeadRequest](../../Models/Operations/RemoveCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmLeadResponse](../../Models/Operations/RemoveCrmLeadResponse.md)**


## updateCrmLead

Update a lead

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCrmLeadRequest();
    $request->crmLead = new Shared\CrmLead();
    $request->crmLead->address = new Shared\PropertyCrmLeadAddress();
    $request->crmLead->address->address1 = 'string';
    $request->crmLead->address->address2 = 'string';
    $request->crmLead->address->city = 'West Vernerworth';
    $request->crmLead->address->country = 'Suriname';
    $request->crmLead->address->countryCode = 'ID';
    $request->crmLead->address->postalCode = '87400-2256';
    $request->crmLead->address->region = 'string';
    $request->crmLead->address->regionCode = 'string';
    $request->crmLead->companyId = 'string';
    $request->crmLead->companyName = 'Gibson - Cummings';
    $request->crmLead->contactId = 'string';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T08:55:32.549Z');
    $request->crmLead->creatorUserId = 'string';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<ID>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = 'string';
    $request->crmLead->raw = new Shared\PropertyCrmLeadRaw();
    $request->crmLead->source = 'string';
    $request->crmLead->status = 'string';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T10:08:49.472Z');
    $request->crmLead->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

