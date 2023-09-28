# Call
(*call*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUcConnectionIdCallRequest();
    $request->agentId = 'Directives';
    $request->connectionId = 'female than';
    $request->contactId = 'reintermediate Enid Applications';
    $request->limit = 1980.39;
    $request->offset = 3478;
    $request->order = 'white Oklahoma Functionality';
    $request->query = 'pricing whether Hillsboro';
    $request->sort = 'Wooden desensitize SCSI';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-03T12:40:46.997Z');

    $response = $sdk->call->getUcConnectionIdCall($request);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallRequest](../../models/operations/GetUcConnectionIdCallRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUcConnectionIdCallResponse](../../models/operations/GetUcConnectionIdCallResponse.md)**

