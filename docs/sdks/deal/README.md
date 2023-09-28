# Deal
(*deal*)

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
    $request->connectionId = 'Fresh';
    $request->id = '<ID>';

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
    $request->companyId = 'Tools Card copying';
    $request->connectionId = 'Renminbi';
    $request->contactId = 'till payment World';
    $request->limit = 8656.16;
    $request->offset = 4455.8;
    $request->order = 'global';
    $request->query = 'Program Bespoke Wisconsin';
    $request->sort = 'Netherlands under';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-23T01:47:21.816Z');

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
    $request->connectionId = 'Concrete Director';
    $request->id = '<ID>';

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
    $request->crmDeal->amount = 7725.78;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-28T08:42:49.591Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-23T15:03:53.999Z');
    $request->crmDeal->currency = 'Afghani';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'North';
    $request->crmDeal->name = 'midnight';
    $request->crmDeal->pipeline = 'envisioneer Functionality Loan';
    $request->crmDeal->probability = 7051.73;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Krone';
    $request->crmDeal->stage = 'pascal aliquam gripping';
    $request->crmDeal->tags = [
        'where',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-05T10:21:22.505Z');
    $request->crmDeal->wonReason = 'Savings kilogram';
    $request->connectionId = 'Chair weber silver';
    $request->id = '<ID>';

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
    $request->crmDeal->amount = 6144.41;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T09:55:59.977Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-20T07:28:03.436Z');
    $request->crmDeal->currency = 'Convertible Marks';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'pfft female';
    $request->crmDeal->name = 'Expressway';
    $request->crmDeal->pipeline = 'withdrawal Extended busily';
    $request->crmDeal->probability = 7998.22;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'spiffy sometimes';
    $request->crmDeal->stage = 'transmitter';
    $request->crmDeal->tags = [
        'intermediate',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-06T18:34:11.762Z');
    $request->crmDeal->wonReason = 'Cisgender input HTTP';
    $request->connectionId = 'accusantium Checking';

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
    $request->crmDeal->amount = 4050.98;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-15T04:05:31.641Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-04T01:28:32.466Z');
    $request->crmDeal->currency = 'Bermudian Dollar (customarily known as Bermuda Dollar)';
    $request->crmDeal->id = '<ID>';
    $request->crmDeal->lostReason = 'laudantium Southwest';
    $request->crmDeal->name = 'wail Developer';
    $request->crmDeal->pipeline = 'male Samarium Gourde';
    $request->crmDeal->probability = 6728.74;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'Stage Gasoline Metal';
    $request->crmDeal->stage = 'Corporate withdrawal Tasty';
    $request->crmDeal->tags = [
        'extranet',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-16T22:38:02.052Z');
    $request->crmDeal->wonReason = 'phooey';
    $request->connectionId = 'Jazz';
    $request->id = '<ID>';

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

