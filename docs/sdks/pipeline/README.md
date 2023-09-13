# pipeline

### Available Operations

* [deleteCrmConnectionIdPipelineId](#deletecrmconnectionidpipelineid) - Remove a pipeline
* [getCrmConnectionIdPipeline](#getcrmconnectionidpipeline) - List all pipelines
* [getCrmConnectionIdPipelineId](#getcrmconnectionidpipelineid) - Retrieve a pipeline
* [patchCrmConnectionIdPipelineId](#patchcrmconnectionidpipelineid) - Update a pipeline
* [postCrmConnectionIdPipeline](#postcrmconnectionidpipeline) - Create a pipeline
* [putCrmConnectionIdPipelineId](#putcrmconnectionidpipelineid) - Update a pipeline

## deleteCrmConnectionIdPipelineId

Remove a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'cum';
    $request->id = '09227fcc-4799-46c9-b7bb-c57f38928a86';

    $requestSecurity = new DeleteCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->deleteCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest](../../models/operations/DeleteCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdSecurity](../../models/operations/DeleteCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdResponse](../../models/operations/DeleteCrmConnectionIdPipelineIdResponse.md)**


## getCrmConnectionIdPipeline

List all pipelines

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineRequest();
    $request->connectionId = 'ipsa';
    $request->limit = 520.16;
    $request->offset = 7775.63;
    $request->order = 'ad';
    $request->query = 'atque';
    $request->sort = 'illum';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-07-08');

    $requestSecurity = new GetCrmConnectionIdPipelineSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->getCrmConnectionIdPipeline($request, $requestSecurity);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest](../../models/operations/GetCrmConnectionIdPipelineRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineSecurity](../../models/operations/GetCrmConnectionIdPipelineSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineResponse](../../models/operations/GetCrmConnectionIdPipelineResponse.md)**


## getCrmConnectionIdPipelineId

Retrieve a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'facere';
    $request->id = '63e4aa56-8464-4579-8fc6-c0e503f56831';

    $requestSecurity = new GetCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->getCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest](../../models/operations/GetCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdSecurity](../../models/operations/GetCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdResponse](../../models/operations/GetCrmConnectionIdPipelineIdResponse.md)**


## patchCrmConnectionIdPipelineId

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d', '2022-09-22');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 8251.83;
    $request->crmPipeline->id = '8ed87b28-e8af-4abc-986e-241e43b23424';
    $request->crmPipeline->name = 'Mrs. Tanya Stamm';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-16');
    $request->connectionId = 'nisi';
    $request->id = '2aa9ae4a-e8ab-44a9-8492-c5e8ba5d4aa4';

    $requestSecurity = new PatchCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->patchCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest](../../models/operations/PatchCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdSecurity](../../models/operations/PatchCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdResponse](../../models/operations/PatchCrmConnectionIdPipelineIdResponse.md)**


## postCrmConnectionIdPipeline

Create a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d', '2022-05-03');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 239.1;
    $request->crmPipeline->id = '8bd380c2-9aa8-4dd7-9bdd-aa30b7b91449';
    $request->crmPipeline->name = 'Elias Homenick';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-19');
    $request->connectionId = 'totam';

    $requestSecurity = new PostCrmConnectionIdPipelineSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->postCrmConnectionIdPipeline($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest](../../models/operations/PostCrmConnectionIdPipelineRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineSecurity](../../models/operations/PostCrmConnectionIdPipelineSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineResponse](../../models/operations/PostCrmConnectionIdPipelineResponse.md)**


## putCrmConnectionIdPipelineId

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d', '2022-02-21');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 1110.26;
    $request->crmPipeline->id = '8bb71804-f423-4d54-b935-f377ac5c9b7e';
    $request->crmPipeline->name = 'Lee Reichert';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-03-28');
    $request->connectionId = 'minima';
    $request->id = '23105e7c-34ca-4b0e-8b81-2a66148944a8';

    $requestSecurity = new PutCrmConnectionIdPipelineIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->pipeline->putCrmConnectionIdPipelineId($request, $requestSecurity);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest](../../models/operations/PutCrmConnectionIdPipelineIdRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdSecurity](../../models/operations/PutCrmConnectionIdPipelineIdSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdResponse](../../models/operations/PutCrmConnectionIdPipelineIdResponse.md)**

