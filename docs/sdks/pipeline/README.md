# Pipeline
(*pipeline*)

### Available Operations

* [createCrmPipeline](#createcrmpipeline) - Create a pipeline
* [getCrmPipeline](#getcrmpipeline) - Retrieve a pipeline
* [listCrmPipelines](#listcrmpipelines) - List all pipelines
* [patchCrmPipeline](#patchcrmpipeline) - Update a pipeline
* [removeCrmPipeline](#removecrmpipeline) - Remove a pipeline
* [updateCrmPipeline](#updatecrmpipeline) - Update a pipeline

## createCrmPipeline

Create a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-24T14:15:54.218Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 6254.97;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-01T06:10:18.007Z');
    $request->connectionId = 'string';

    $response = $sdk->pipeline->createCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCrmPipelineRequest](../../models/operations/CreateCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmPipelineResponse](../../models/operations/CreateCrmPipelineResponse.md)**


## getCrmPipeline

Retrieve a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmPipelineRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmPipelineRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->pipeline->getCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmPipelineRequest](../../models/operations/GetCrmPipelineRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmPipelineResponse](../../models/operations/GetCrmPipelineResponse.md)**


## listCrmPipelines

List all pipelines

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmPipelinesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmPipelinesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 3318.18;
    $request->offset = 4834.28;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-29T15:47:27.871Z');

    $response = $sdk->pipeline->listCrmPipelines($request);

    if ($response->crmPipelines !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCrmPipelinesRequest](../../models/operations/ListCrmPipelinesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmPipelinesResponse](../../models/operations/ListCrmPipelinesResponse.md)**


## patchCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-26T17:19:01.949Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 8620.92;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-03T12:55:27.421Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->pipeline->patchCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCrmPipelineRequest](../../models/operations/PatchCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmPipelineResponse](../../models/operations/PatchCrmPipelineResponse.md)**


## removeCrmPipeline

Remove a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmPipelineRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmPipelineRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->pipeline->removeCrmPipeline($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCrmPipelineRequest](../../models/operations/RemoveCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmPipelineResponse](../../models/operations/RemoveCrmPipelineResponse.md)**


## updateCrmPipeline

Update a pipeline

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmPipelineRequest;
use \Unified\Unified_to\Models\Shared\CrmPipeline;
use \Unified\Unified_to\Models\Shared\PropertyCrmPipelineRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmPipelineRequest();
    $request->crmPipeline = new CrmPipeline();
    $request->crmPipeline->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-27T08:28:05.275Z');
    $request->crmPipeline->dealProbability = false;
    $request->crmPipeline->displayOrder = 8923.83;
    $request->crmPipeline->id = '<ID>';
    $request->crmPipeline->isActive = false;
    $request->crmPipeline->name = 'string';
    $request->crmPipeline->raw = new PropertyCrmPipelineRaw();
    $request->crmPipeline->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-18T01:45:20.441Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->pipeline->updateCrmPipeline($request);

    if ($response->crmPipeline !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCrmPipelineRequest](../../models/operations/UpdateCrmPipelineRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmPipelineResponse](../../models/operations/UpdateCrmPipelineResponse.md)**

