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
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'Lindboro';
    $request->crmLead->address->country = 'Saint Barthelemy';
    $request->crmLead->address->countryCode = 'SG';
    $request->crmLead->address->postalCode = '67307-8667';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Langosh - Fritsch';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-23T15:29:07.093Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'loyally' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-02T07:48:01.587Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->lead->createCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
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
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->lead->getCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
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
    $request->companyId = '<value>';
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2895.08;
    $request->offset = 6446.8;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-12T07:27:29.016Z');
    $request->userId = '<value>';;

    $response = $sdk->lead->listCrmLeads($request);

    if ($response->crmLeads !== null) {
        // handle response
    }
} catch (Throwable $e) {
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
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'Caseyberg';
    $request->crmLead->address->country = 'Cote d\'Ivoire';
    $request->crmLead->address->countryCode = 'LK';
    $request->crmLead->address->postalCode = '22291';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Altenwerth, Lebsack and Wintheiser';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-16T13:33:21.530Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'Cotton' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-03T12:44:18.120Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->lead->patchCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
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
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->lead->removeCrmLead($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
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
    $request->crmLead->address->address1 = '<value>';
    $request->crmLead->address->address2 = '<value>';
    $request->crmLead->address->city = 'West Vernerworth';
    $request->crmLead->address->country = 'Suriname';
    $request->crmLead->address->countryCode = 'ID';
    $request->crmLead->address->postalCode = '87400-2256';
    $request->crmLead->address->region = '<value>';
    $request->crmLead->address->regionCode = '<value>';
    $request->crmLead->companyId = '<value>';
    $request->crmLead->companyName = 'Gibson - Cummings';
    $request->crmLead->contactId = '<value>';
    $request->crmLead->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-12T08:55:32.549Z');
    $request->crmLead->creatorUserId = '<value>';
    $request->crmLead->emails = [
        new Shared\CrmEmail(),
    ];
    $request->crmLead->id = '<id>';
    $request->crmLead->isActive = false;
    $request->crmLead->name = '<value>';
    $request->crmLead->raw = [
        'auxiliary' => '<value>',
    ];
    $request->crmLead->source = '<value>';
    $request->crmLead->status = '<value>';
    $request->crmLead->telephones = [
        new Shared\CrmTelephone(),
    ];
    $request->crmLead->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-06T14:50:33.716Z');
    $request->crmLead->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->lead->updateCrmLead($request);

    if ($response->crmLead !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmLeadRequest](../../Models/Operations/UpdateCrmLeadRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmLeadResponse](../../Models/Operations/UpdateCrmLeadResponse.md)**

