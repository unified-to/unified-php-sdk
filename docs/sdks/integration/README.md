# Integration
(*integration*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationCategories;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationCategories::Enrich,
    ];
    $request->limit = 7363.95;
    $request->offset = 8214.4;
    $request->order = 'Nelda Implemented';
    $request->sort = 'cabinet';
    $request->summary = false;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-05T00:16:37.455Z');

    $response = $sdk->integration->getUnifiedIntegration($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest](../../models/operations/GetUnifiedIntegrationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest();
    $request->env = 'Algerian';
    $request->externalXref = 'Cambridgeshire Surinam';
    $request->failureRedirect = 'Designer Drive';
    $request->integrationType = 'program Home';
    $request->lang = 'Plastic program';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::CrmFileRead,
    ];
    $request->state = 'Functionality Product';
    $request->subdomain = 'payment Developer Dynamic';
    $request->successRedirect = 'Northeast';
    $request->workspaceId = 'duh empower Kwanza';

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationIntegrationTypeRequest();
    $request->integrationType = 'Pizza Electric';

    $response = $sdk->integration->getUnifiedIntegrationIntegrationType($request);

    if ($response->integration !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationIntegrationTypeRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdCategories;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationWorkspaceWorkspaceIdRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationWorkspaceWorkspaceIdCategories::Hris,
    ];
    $request->env = 'North Southeast exercitationem';
    $request->summary = false;
    $request->workspaceId = 'Bronze Plastic';

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

