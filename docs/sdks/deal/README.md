# deal

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
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdDealIdRequest();
    $request->connectionId = 'nostrum';
    $request->id = '4fdd5ea9-5433-498d-afb4-2a8d63388e4d';

    $requestSecurity = new DeleteCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->deleteCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdRequest](../../models/operations/DeleteCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdDealIdSecurity](../../models/operations/DeleteCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealRequest();
    $request->companyId = 'deleniti';
    $request->connectionId = 'aut';
    $request->contactId = 'nesciunt';
    $request->limit = 6241.64;
    $request->offset = 8999.43;
    $request->order = 'culpa';
    $request->query = 'quis';
    $request->sort = 'asperiores';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-16T09:16:26.639Z');

    $requestSecurity = new GetCrmConnectionIdDealSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->getCrmConnectionIdDeal($request, $requestSecurity);

    if ($response->crmDeals !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealRequest](../../models/operations/GetCrmConnectionIdDealRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealSecurity](../../models/operations/GetCrmConnectionIdDealSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdDealIdRequest();
    $request->connectionId = 'sunt';
    $request->id = '8a244fd6-1903-49da-8d38-ed0dc671dc7f';

    $requestSecurity = new GetCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->getCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdRequest](../../models/operations/GetCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdDealIdSecurity](../../models/operations/GetCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 655.82;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-27T22:22:59.359Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-05T02:33:10.229Z');
    $request->crmDeal->currency = 'quasi';
    $request->crmDeal->id = '5920c90d-1b49-401f-abd8-9c8a32639da5';
    $request->crmDeal->lostReason = 'facilis';
    $request->crmDeal->name = 'Gayle Huel Sr.';
    $request->crmDeal->pipeline = 'facilis';
    $request->crmDeal->probability = 5423.22;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'atque';
    $request->crmDeal->stage = 'illo';
    $request->crmDeal->tags = [
        'dolorum',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-11T21:23:09.486Z');
    $request->crmDeal->wonReason = 'maiores';
    $request->connectionId = 'ea';
    $request->id = '43664a8f-0af8-4c69-9d73-2d9fbaf9476a';

    $requestSecurity = new PatchCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->patchCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdRequest](../../models/operations/PatchCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdDealIdSecurity](../../models/operations/PatchCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdDealRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 1829.52;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-31T02:28:56.167Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-05-09T10:10:01.467Z');
    $request->crmDeal->currency = 'optio';
    $request->crmDeal->id = 'c50c8a35-12c7-4378-8893-0750a00e966e';
    $request->crmDeal->lostReason = 'eligendi';
    $request->crmDeal->name = 'Florence Keeling';
    $request->crmDeal->pipeline = 'neque';
    $request->crmDeal->probability = 816.89;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'omnis';
    $request->crmDeal->stage = 'quaerat';
    $request->crmDeal->tags = [
        'nesciunt',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-27T13:13:17.103Z');
    $request->crmDeal->wonReason = 'optio';
    $request->connectionId = 'molestiae';

    $requestSecurity = new PostCrmConnectionIdDealSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->postCrmConnectionIdDeal($request, $requestSecurity);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealRequest](../../models/operations/PostCrmConnectionIdDealRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdDealSecurity](../../models/operations/PostCrmConnectionIdDealSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest;
use \Unified\Unified_to\Models\Shared\CrmDeal;
use \Unified\Unified_to\Models\Shared\PropertyCrmDealRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdDealIdRequest();
    $request->crmDeal = new CrmDeal();
    $request->crmDeal->amount = 5408.26;
    $request->crmDeal->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-30T05:40:43.542Z');
    $request->crmDeal->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-07T20:11:30.814Z');
    $request->crmDeal->currency = 'dolor';
    $request->crmDeal->id = '98ed3d3a-b7ca-43c5-8a86-49a70cfd5d69';
    $request->crmDeal->lostReason = 'corrupti';
    $request->crmDeal->name = 'Rudy Kirlin III';
    $request->crmDeal->pipeline = 'magnam';
    $request->crmDeal->probability = 3189;
    $request->crmDeal->raw = new PropertyCrmDealRaw();
    $request->crmDeal->source = 'quae';
    $request->crmDeal->stage = 'ipsa';
    $request->crmDeal->tags = [
        'iure',
    ];
    $request->crmDeal->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-24T22:30:32.992Z');
    $request->crmDeal->wonReason = 'et';
    $request->connectionId = 'perspiciatis';
    $request->id = 'ea83d492-ed14-4b8a-ac19-54545e955dcc';

    $requestSecurity = new PutCrmConnectionIdDealIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->deal->putCrmConnectionIdDealId($request, $requestSecurity);

    if ($response->crmDeal !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdRequest](../../models/operations/PutCrmConnectionIdDealIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdSecurity](../../models/operations/PutCrmConnectionIdDealIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdDealIdResponse](../../models/operations/PutCrmConnectionIdDealIdResponse.md)**

