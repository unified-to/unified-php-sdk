# Login
(*login*)

### Available Operations

* [getUnifiedIntegrationLoginWorkspaceIdIntegrationType](#getunifiedintegrationloginworkspaceidintegrationtype) - Sign in a user

## getUnifiedIntegrationLoginWorkspaceIdIntegrationType

Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and emails are returned.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationLoginWorkspaceIdIntegrationTypeRequest();
    $request->env = 'Rubber';
    $request->failureRedirect = 'gold Cambridgeshire';
    $request->integrationType = 'Plastic services pixel';
    $request->redirect = false;
    $request->state = 'Volkswagen Southwest';
    $request->successRedirect = 'drive integrated Bicycle';
    $request->workspaceId = 'Fantastic recontextualize Frozen';

    $response = $sdk->login->getUnifiedIntegrationLoginWorkspaceIdIntegrationType($request);

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

