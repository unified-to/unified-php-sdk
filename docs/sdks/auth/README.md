# Auth

### Available Operations

* [getUnifiedIntegrationAuthWorkspaceIdIntegrationType](#getunifiedintegrationauthworkspaceidintegrationtype) - Create connection indirectly
* [getUnifiedIntegrationLoginWorkspaceIdIntegrationType](#getunifiedintegrationloginworkspaceidintegrationtype) - Sign in a user

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
    $request->env = 'consectetur';
    $request->externalXref = 'eligendi';
    $request->failureRedirect = 'dignissimos';
    $request->integrationType = 'consectetur';
    $request->lang = 'soluta';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::TicketingAgentWrite,
    ];
    $request->state = 'temporibus';
    $request->subdomain = 'officia';
    $request->successRedirect = 'amet';
    $request->workspaceId = 'tenetur';

    $response = $sdk->auth->getUnifiedIntegrationAuthWorkspaceIdIntegrationType($request);

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


## getUnifiedIntegrationLoginWorkspaceIdIntegrationType

Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and emails are returned.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest();
    $request->env = 'aspernatur';
    $request->failureRedirect = 'quo';
    $request->integrationType = 'itaque';
    $request->redirect = false;
    $request->state = 'illum';
    $request->successRedirect = 'laborum';
    $request->workspaceId = 'dignissimos';

    $response = $sdk->auth->getUnifiedIntegrationLoginWorkspaceIdIntegrationType($request);

    if ($response->getUnifiedIntegrationLoginWorkspaceIdIntegrationType200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                   | Type                                                                                                                                                                                        | Required                                                                                                                                                                                    | Description                                                                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest.md) | :heavy_check_mark:                                                                                                                                                                          | The request object to use for the request.                                                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeResponse](../../models/operations/GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeResponse.md)**

