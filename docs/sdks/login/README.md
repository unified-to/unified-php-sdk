# Login


### Available Operations

* [getUnifiedIntegrationLogin](#getunifiedintegrationlogin) - Sign in a user

## getUnifiedIntegrationLogin

Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and email are returned inside a jwt parameter, which is a JSON web token that is base-64 encoded.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetUnifiedIntegrationLoginRequest();
    $request->env = '<value>';
    $request->failureRedirect = '<value>';
    $request->integrationType = '<value>';
    $request->redirect = false;
    $request->state = 'Virginia';
    $request->successRedirect = '<value>';
    $request->workspaceId = '<value>';;

    $response = $sdk->login->getUnifiedIntegrationLogin($request);

    if ($response->res !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginRequest](../../Models/Operations/GetUnifiedIntegrationLoginRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationLoginResponse](../../Models/Operations/GetUnifiedIntegrationLoginResponse.md)**

