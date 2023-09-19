# Integration

### Available Operations

* [getUnifiedIntegration](#getunifiedintegration) - Returns all integrations
* [getUnifiedIntegrationAuthWorkspaceIdIntegrationType](#getunifiedintegrationauthworkspaceidintegrationtype) - Create connection indirectly
* [getUnifiedIntegrationIntegrationType](#getunifiedintegrationintegrationtype) - Retrieve an integration
* [getUnifiedIntegrationWorkspaceWorkspaceId](#getunifiedintegrationworkspaceworkspaceid) - Returns all activated integrations in a workspace

## getUnifiedIntegration

Returns all integrations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationCategories;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationCategories::Enrich,
    ];
    $request->limit = 814.31;
    $request->offset = 9565.84;
    $request->order = 'temporibus';
    $request->sort = 'sapiente';
    $request->summary = false;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-20T09:01:47.169Z');

    $requestSecurity = new GetUnifiedIntegrationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->integration->getUnifiedIntegration($request, $requestSecurity);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest](../../models/operations/GetUnifiedIntegrationRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationSecurity](../../models/operations/GetUnifiedIntegrationSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse](../../models/operations/GetUnifiedIntegrationResponse.md)**


## getUnifiedIntegrationAuthWorkspaceIdIntegrationType

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest();
    $request->env = 'nobis';
    $request->externalXref = 'adipisci';
    $request->failureRedirect = 'itaque';
    $request->integrationType = 'unde';
    $request->lang = 'beatae';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::AtsInterviewRead,
    ];
    $request->state = 'quas';
    $request->subdomain = 'maiores';
    $request->successRedirect = 'voluptate';
    $request->workspaceId = 'libero';

    $response = $sdk->integration->getUnifiedIntegrationAuthWorkspaceIdIntegrationType($request);

    if ($response->getUnifiedIntegrationAuthWorkspaceIdIntegrationType200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest.md) | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse](../../models/operations/GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse.md)**


## getUnifiedIntegrationIntegrationType

Retrieve an integration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationIntegrationTypeRequest();
    $request->integrationType = 'quod';

    $requestSecurity = new GetUnifiedIntegrationIntegrationTypeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->integration->getUnifiedIntegrationIntegrationType($request, $requestSecurity);

    if ($response->integration !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationIntegrationTypeRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeSecurity](../../models/operations/GetUnifiedIntegrationIntegrationTypeSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeResponse](../../models/operations/GetUnifiedIntegrationIntegrationTypeResponse.md)**


## getUnifiedIntegrationWorkspaceWorkspaceId

No authentication required as this is to be used by front-end interface

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdCategories;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationWorkspaceWorkspaceIdRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationWorkspaceWorkspaceIdCategories::Auth,
    ];
    $request->env = 'error';
    $request->summary = false;
    $request->workspaceId = 'at';

    $response = $sdk->integration->getUnifiedIntegrationWorkspaceWorkspaceId($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest](../../models/operations/GetUnifiedIntegrationWorkspaceWorkspaceIdRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdResponse](../../models/operations/GetUnifiedIntegrationWorkspaceWorkspaceIdResponse.md)**

