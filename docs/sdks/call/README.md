# Call


### Available Operations

* [listUcCalls](#listuccalls) - List all calls

## listUcCalls

List all calls

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListUcCallsRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 465.25;
    $request->offset = 4996.09;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-24T23:18:21.548Z');
    $request->userId = '<value>';;

    $response = $sdk->call->listUcCalls($request);

    if ($response->ucCalls !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\ListUcCallsRequest](../../Models/Operations/ListUcCallsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUcCallsResponse](../../Models/Operations/ListUcCallsResponse.md)**

