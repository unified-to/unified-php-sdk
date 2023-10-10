# Pipeline
(*pipeline*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'Customer';
    $request->id = '<ID>';

    $response = $sdk->pipeline->deleteCrmConnectionIdPipelineId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdPipelineIdRequest](../../models/operations/DeleteCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineRequest();
    $request->connectionId = 'dirty Awesome Checking';
    $request->limit = 9055.88;
    $request->offset = 3443.76;
    $request->order = 'glom';
    $request->query = 'panel';
    $request->sort = 'Latin tightly';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-01T15:47:43.244Z');

    $response = $sdk->pipeline->getCrmConnectionIdPipeline($request);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineRequest](../../models/operations/GetCrmConnectionIdPipelineRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdPipelineIdRequest();
    $request->connectionId = 'Tricycle roughly markets';
    $request->id = '<ID>';

    $response = $sdk->pipeline->getCrmConnectionIdPipelineId($request);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdPipelineIdRequest](../../models/operations/GetCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-24T17:39:51.183Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 664.58;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'bandwidth';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-27T01:55:15.440Z');
    $request->connectionId = 'Chips';
    $request->id = '<ID>';

    $response = $sdk->pipeline->patchCrmConnectionIdPipelineId($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdPipelineIdRequest](../../models/operations/PatchCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-10T23:55:22.206Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 3879.73;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'upward Mayaguez';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-25T10:43:23.679Z');
    $request->connectionId = 'Lead Health';

    $response = $sdk->pipeline->postCrmConnectionIdPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdPipelineRequest](../../models/operations/PostCrmConnectionIdPipelineRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdPipelineIdRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->active = false;
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-16T17:24:47.805Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 5470.76;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->name = 'West';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-28T07:49:31.151Z');
    $request->connectionId = 'optimizing';
    $request->id = '<ID>';

    $response = $sdk->pipeline->putCrmConnectionIdPipelineId($request);

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
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdRequest](../../models/operations/PutCrmConnectionIdPipelineIdRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdPipelineIdResponse](../../models/operations/PutCrmConnectionIdPipelineIdResponse.md)**

