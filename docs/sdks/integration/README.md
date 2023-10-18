# Integration
(*integration*)

### Available Operations

* [getUnifiedIntegration](#getunifiedintegration) - Retrieve an integration
* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Create connection indirectly
* [listUnifiedIntegrationWorkspaces](#listunifiedintegrationworkspaces) - Returns all activated integrations in a workspace
* [listUnifiedIntegrations](#listunifiedintegrations) - Returns all integrations

## getUnifiedIntegration

Retrieve an integration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->integrationType = 'Mobility';

    $response = $sdk->integration->getUnifiedIntegration($request);

    if ($response->integration !== null) {
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


## getUnifiedIntegrationAuth

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthScopes;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthRequest();
    $request->env = 'supposing';
    $request->externalXref = 'Nobelium';
    $request->failureRedirect = 'Branding';
    $request->integrationType = 'pascal';
    $request->lang = 'West';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthScopes::TicketingAgentRead,
    ];
    $request->state = 'blot';
    $request->subdomain = 'Haverhill';
    $request->successRedirect = 'Investment';
    $request->workspaceId = 'spirit';

    $response = $sdk->integration->getUnifiedIntegrationAuth($request);

    if ($response->getUnifiedIntegrationAuth200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest](../../models/operations/GetUnifiedIntegrationAuthRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse](../../models/operations/GetUnifiedIntegrationAuthResponse.md)**


## listUnifiedIntegrationWorkspaces

No authentication required as this is to be used by front-end interface

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest;
use \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesCategories;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUnifiedIntegrationWorkspacesRequest();
    $request->active = false;
    $request->categories = [
        ListUnifiedIntegrationWorkspacesCategories::Martech,
    ];
    $request->env = 'supposing';
    $request->limit = 3404.67;
    $request->offset = 4075.93;
    $request->summary = false;
    $request->updatedGte = 'Representative';
    $request->workspaceId = 'transplantation';

    $response = $sdk->integration->listUnifiedIntegrationWorkspaces($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest](../../models/operations/ListUnifiedIntegrationWorkspacesRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse](../../models/operations/ListUnifiedIntegrationWorkspacesResponse.md)**


## listUnifiedIntegrations

Returns all integrations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest;
use \Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsCategories;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUnifiedIntegrationsRequest();
    $request->active = false;
    $request->categories = [
        ListUnifiedIntegrationsCategories::Auth,
    ];
    $request->env = 'Boron';
    $request->limit = 6471.35;
    $request->offset = 6154.42;
    $request->order = 'Sports';
    $request->sort = 'at';
    $request->summary = false;
    $request->updatedGte = 'Gabon';

    $response = $sdk->integration->listUnifiedIntegrations($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest](../../models/operations/ListUnifiedIntegrationsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse](../../models/operations/ListUnifiedIntegrationsResponse.md)**

