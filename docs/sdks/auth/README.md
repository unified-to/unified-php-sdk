# Auth
(*auth*)

### Available Operations

* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Create connection indirectly
* [getUnifiedIntegrationLogin](#getunifiedintegrationlogin) - Sign in a user

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
    $request->env = 'Reggae Van pascal';
    $request->externalXref = 'plum';
    $request->failureRedirect = 'North groupware deposit';
    $request->integrationType = 'Aston pink Crew';
    $request->lang = 'collar Northwest North';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthScopes::AuthLogin,
    ];
    $request->state = 'Rubber Southwest';
    $request->subdomain = 'North South';
    $request->successRedirect = 'Rubber overriding middleware';
    $request->workspaceId = 'redefine AGP';

    $response = $sdk->auth->getUnifiedIntegrationAuth($request);

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


## getUnifiedIntegrationLogin

Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and emails are returned.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationLoginRequest();
    $request->env = 'Bicycle markets Soft';
    $request->failureRedirect = 'bus Strontium';
    $request->integrationType = 'more purple';
    $request->redirect = false;
    $request->state = 'District';
    $request->successRedirect = 'pascal Berkshire';
    $request->workspaceId = 'meanwhile volt';

    $response = $sdk->auth->getUnifiedIntegrationLogin($request);

    if ($response->getUnifiedIntegrationLogin200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest](../../models/operations/GetUnifiedIntegrationLoginRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginResponse](../../models/operations/GetUnifiedIntegrationLoginResponse.md)**

