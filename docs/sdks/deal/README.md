# Deal

### Available Operations

* [deleteCrmConnectionIdDealId](#deletecrmconnectioniddealid) - Remove a deal
* [getCrmConnectionIdDeal](#getcrmconnectioniddeal) - List all deals
* [getCrmConnectionIdDealId](#getcrmconnectioniddealid) - Retrieve a deal
* [patchCrmConnectionIdDealId](#patchcrmconnectioniddealid) - Update a deal
* [postCrmConnectionIdDeal](#postcrmconnectioniddeal) - Create a deal
* [putCrmConnectionIdDealId](#putcrmconnectioniddealid) - Update a deal

## deleteCrmConnectionIdDealId

Remove a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdDealIdRequest();
    $request->connectionId = 'occaecati';
    $request->id = '8dafb42a-8d63-4388-a4d8-039ea5f9b18a';

    $response = $sdk->deal->deleteCrmConnectionIdDealId($request);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest](../../models/operations/DeleteCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdResponse](../../models/operations/DeleteCrmConnectionIdDealIdResponse.md)**


## getCrmConnectionIdDeal

List all deals

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealRequest();
    $request->companyId = 'qui';
    $request->connectionId = 'tempora';
    $request->contactId = 'modi';
    $request->limit = 9565.32;
    $request->offset = 8198.45;
    $request->order = 'nisi';
    $request->query = 'ab';
    $request->sort = 'omnis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-14T05:28:28.891Z');

    $response = $sdk->deal->getCrmConnectionIdDeal($request);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest](../../models/operations/GetCrmConnectionIdDealRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealResponse](../../models/operations/GetCrmConnectionIdDealResponse.md)**


## getCrmConnectionIdDealId

Retrieve a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealIdRequest();
    $request->connectionId = 'iste';
    $request->id = 'dacd38ed-0dc6-471d-87f1-e3af15920c90';

    $response = $sdk->deal->getCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest](../../models/operations/GetCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdResponse](../../models/operations/GetCrmConnectionIdDealIdResponse.md)**


## patchCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 8337.06;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-05T08:51:46.893Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-21T06:29:04.361Z');
    $request->crmDeal->currency = 'aperiam';
    $request->crmDeal->id = '1f2bd89c-8a32-4639-9a5b-7b6902b881a9';
    $request->crmDeal->lostReason = 'incidunt';
    $request->crmDeal->name = 'Brett Gleichner';
    $request->crmDeal->pipeline = 'autem';
    $request->crmDeal->probability = 2725.62;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'mollitia';
    $request->crmDeal->stage = 'quas';
    $request->crmDeal->tags = [
        'hic',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-03T20:06:53.494Z');
    $request->crmDeal->wonReason = 'asperiores';
    $request->connectionId = 'rem';
    $request->id = 'c691d732-d9fb-4af9-876a-2ae8dcc50c8a';

    $response = $sdk->deal->patchCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest](../../models/operations/PatchCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdResponse](../../models/operations/PatchCrmConnectionIdDealIdResponse.md)**


## postCrmConnectionIdDeal

Create a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 2350.13;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-18T07:33:26.747Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-21T17:04:09.123Z');
    $request->crmDeal->currency = 'iusto';
    $request->crmDeal->id = '37848930-750a-400e-966e-c736d4319439';
    $request->crmDeal->lostReason = 'corrupti';
    $request->crmDeal->name = 'Javier Lindgren';
    $request->crmDeal->pipeline = 'cupiditate';
    $request->crmDeal->probability = 1577.51;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'dolor';
    $request->crmDeal->stage = 'cupiditate';
    $request->crmDeal->tags = [
        'praesentium',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-06T17:44:39.339Z');
    $request->crmDeal->wonReason = 'ipsum';
    $request->connectionId = 'pariatur';

    $response = $sdk->deal->postCrmConnectionIdDeal($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest](../../models/operations/PostCrmConnectionIdDealRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealResponse](../../models/operations/PostCrmConnectionIdDealResponse.md)**


## putCrmConnectionIdDealId

Update a deal

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 2276.69;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-03T15:27:44.400Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-10T14:22:57.077Z');
    $request->crmDeal->currency = 'est';
    $request->crmDeal->id = '3c5ca864-9a70-4cfd-9d69-89b720645107';
    $request->crmDeal->lostReason = 'voluptate';
    $request->crmDeal->name = 'Harold Metz';
    $request->crmDeal->pipeline = 'voluptatum';
    $request->crmDeal->probability = 1880.08;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'facere';
    $request->crmDeal->stage = 'eius';
    $request->crmDeal->tags = [
        'perspiciatis',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-24T10:39:05.897Z');
    $request->crmDeal->wonReason = 'quibusdam';
    $request->connectionId = 'inventore';
    $request->id = '4b8a2c19-5454-45e9-95dc-c185ea4901c7';

    $response = $sdk->deal->putCrmConnectionIdDealId($request);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest](../../models/operations/PutCrmConnectionIdDealIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdResponse](../../models/operations/PutCrmConnectionIdDealIdResponse.md)**

