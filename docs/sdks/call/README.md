# Call
(*call*)

### Available Operations

* [listUcCalls](#listuccalls) - List all calls

## listUcCalls

List all calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUcCallsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUcCallsRequest();
    $request->agentId = 'Liberia';
    $request->connectionId = 'Cargo';
    $request->contactId = 'West';
    $request->fields = [
        'Pop',
    ];
    $request->limit = 4712.72;
    $request->offset = 244.3;
    $request->order = 'Health';
    $request->query = 'gracefully';
    $request->sort = 'so';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-15T15:11:51.943Z');

    $response = $sdk->call->listUcCalls($request);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\ListUcCallsRequest](../../models/operations/ListUcCallsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUcCallsResponse](../../models/operations/ListUcCallsResponse.md)**

