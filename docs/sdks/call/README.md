# call

### Available Operations

* [getUcConnectionIdCall](#getucconnectionidcall) - List all calls

## getUcConnectionIdCall

List all calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdCallRequest();
    $request->agentId = 'vero';
    $request->connectionId = 'qui';
    $request->contactId = 'consectetur';
    $request->limit = 9958.16;
    $request->offset = 1286.96;
    $request->order = 'explicabo';
    $request->query = 'exercitationem';
    $request->sort = 'nihil';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-07T03:30:14.990Z');

    $requestSecurity = new GetUcConnectionIdCallSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->call->getUcConnectionIdCall($request, $requestSecurity);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest](../../models/operations/GetUcConnectionIdCallRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallSecurity](../../models/operations/GetUcConnectionIdCallSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse](../../models/operations/GetUcConnectionIdCallResponse.md)**

