# Applicationstatus


### Available Operations

* [listAtsApplicationstatuses](#listatsapplicationstatuses) - List all application statuses

## listAtsApplicationstatuses

List all application statuses

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
        $request = new Operations\ListAtsApplicationstatusesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5199.96;
    $request->offset = 7673.65;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-25T18:11:33.180Z');;

    $response = $sdk->applicationstatus->listAtsApplicationstatuses($request);

    if ($response->atsStatuses !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest](../../Models/Operations/ListAtsApplicationstatusesRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesResponse](../../Models/Operations/ListAtsApplicationstatusesResponse.md)**

