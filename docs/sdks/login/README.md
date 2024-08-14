# Login


### Available Operations

* [getUnifiedIntegrationLogin](#getunifiedintegrationlogin) - Sign in a user

## getUnifiedIntegrationLogin

Returns an authentication URL for the specified integration.  Once a successful authentication occurs, the name and email are returned inside a jwt parameter, which is a JSON web token that is base-64 encoded.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetUnifiedIntegrationLoginRequest(
        integrationType: '<value>',
        workspaceId: '<value>',
        env: '<value>',
        failureRedirect: '<value>',
        redirect: false,
        state: 'Virginia',
        successRedirect: '<value>',
    );
    $response = $sdk->login->getUnifiedIntegrationLogin($request);

    if ($response->res !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetUnifiedIntegrationLoginRequest](../../Models/Operations/GetUnifiedIntegrationLoginRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |


### Response

**[?Operations\GetUnifiedIntegrationLoginResponse](../../Models/Operations/GetUnifiedIntegrationLoginResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
