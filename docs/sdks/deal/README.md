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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 1917.45;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-28T04:18:49.785Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-23T15:31:52.925Z');
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
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-13T19:43:32.331Z');
    $request->crmDeal->userId = 'string';
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCrmDealRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-04T01:39:26.472Z');
    $request->userId = 'string';;

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 9874.05;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-09T12:57:05.527Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T17:40:39.112Z');
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
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-22T07:49:20.306Z');
    $request->crmDeal->userId = 'string';
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCrmDealRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCrmDealRequest();
    $request->crmDeal = new Shared\CrmDeal();
    $request->crmDeal->amount = 854.3;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-13T15:21:09.134Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-20T23:55:13.334Z');
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
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-01T00:17:19.942Z');
    $request->crmDeal->userId = 'string';
    $request->crmDeal->wonReason = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**

