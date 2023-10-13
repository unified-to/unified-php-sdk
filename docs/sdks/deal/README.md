# Deal
(*deal*)

### Available Operations

* [createCrmDeal](#createcrmdeal) - Create a deal
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [listCrmDeals](#listcrmdeals) - List all deals
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [updateCrmDeal](#updatecrmdeal) - Update a deal

## createCrmDeal

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 1917.45;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-27T15:05:01.017Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-23T03:04:45.267Z');
    $request->crmDeal->currency = 'Cuban Peso';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'Rap';
    $request->crmDeal->name = 'lay programming Pop';
    $request->crmDeal->pipeline = 'Intersex female';
    $request->crmDeal->probability = 7337.04;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'kilogram morph';
    $request->crmDeal->stage = 'ick';
    $request->crmDeal->tags = [
        'Steel',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-05T12:31:42.723Z');
    $request->crmDeal->wonReason = 'notwithstanding Hybrid';
    $request->connectionId = 'Chile Web';

    $response = $sdk->deal->createCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmDealRequest](../../models/operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmDealResponse](../../models/operations/CreateCrmDealResponse.md)**


## getCrmDeal

Retrieve a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmDealRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmDealRequest();
    $request->connectionId = 'male orange';
    $request->id = '<ID>';

    $response = $sdk->deal->getCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmDealRequest](../../models/operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmDealResponse](../../models/operations/GetCrmDealResponse.md)**


## listCrmDeals

List all deals

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmDealsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmDealsRequest();
    $request->companyId = 'Lamborghini';
    $request->connectionId = 'Health male Tala';
    $request->contactId = 'tan';
    $request->limit = 2926.12;
    $request->offset = 7035.78;
    $request->order = 'sweetly';
    $request->query = 'Cambridgeshire quantifying';
    $request->sort = 'ash distance';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-10T06:24:14.414Z');

    $response = $sdk->deal->listCrmDeals($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmDealsRequest](../../models/operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmDealsResponse](../../models/operations/ListCrmDealsResponse.md)**


## patchCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 9874.05;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-09T08:48:03.715Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T07:03:46.302Z');
    $request->crmDeal->currency = 'Riel';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'female Berkshire Electric';
    $request->crmDeal->name = 'Integration cyan';
    $request->crmDeal->pipeline = 'backing Northeast HEX';
    $request->crmDeal->probability = 6885.22;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Books';
    $request->crmDeal->stage = 'Electric Bicycle Naira';
    $request->crmDeal->tags = [
        'Northwest',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-17T04:00:27.811Z');
    $request->crmDeal->wonReason = 'motivating transition';
    $request->connectionId = 'Usability Folk';
    $request->id = '<ID>';

    $response = $sdk->deal->patchCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmDealRequest](../../models/operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmDealResponse](../../models/operations/PatchCrmDealResponse.md)**


## removeCrmDeal

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmDealRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmDealRequest();
    $request->connectionId = 'Nihonium';
    $request->id = '<ID>';

    $response = $sdk->deal->removeCrmDeal($request);

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmDealRequest](../../models/operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmDealResponse](../../models/operations/RemoveCrmDealResponse.md)**


## updateCrmDeal

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 854.3;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-13T07:04:58.998Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-20T16:49:31.989Z');
    $request->crmDeal->currency = 'Pound Sterling';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'female';
    $request->crmDeal->name = 'Transexual envisioneer bus';
    $request->crmDeal->pipeline = 'Tala Elegant';
    $request->crmDeal->probability = 4198.21;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Principal payment';
    $request->crmDeal->stage = 'solution Interactions Knoxville';
    $request->crmDeal->tags = [
        'Northeast',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-24T17:23:09.389Z');
    $request->crmDeal->wonReason = 'Neither times capacitor';
    $request->connectionId = 'Architect';
    $request->id = '<ID>';

    $response = $sdk->deal->updateCrmDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmDealRequest](../../models/operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmDealResponse](../../models/operations/UpdateCrmDealResponse.md)**

