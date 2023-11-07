# Deal


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 1917.45;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-27T15:05:01.017Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-23T03:04:45.267Z');
    $request->crmDeal->currency = 'Cuban Peso';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 1087.81;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-13T05:28:26.663Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';

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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetCrmDealRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListCrmDealsRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 917.49;
    $request->offset = 8216.92;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-03T12:16:34.604Z');

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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 9874.05;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-09T08:48:03.715Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T07:03:46.302Z');
    $request->crmDeal->currency = 'Riel';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 9555.58;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T14:41:27.897Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveCrmDealRequest();
    $request->connectionId = 'string';
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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 854.3;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-13T07:04:58.998Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-20T16:49:31.989Z');
    $request->crmDeal->currency = 'Pound Sterling';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'string';
    $request->crmDeal->name = 'string';
    $request->crmDeal->pipeline = 'string';
    $request->crmDeal->probability = 2970.01;
    $request->crmDeal->raw = new Shared\PropertyCrmDealRaw();
    $request->crmDeal->source = 'string';
    $request->crmDeal->stage = 'string';
    $request->crmDeal->tags = [
        'string',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-31T15:37:01.475Z');
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
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

