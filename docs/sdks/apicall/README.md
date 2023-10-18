# Apicall
(*apicall*)

### Available Operations

* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls

## getUnifiedApicall

Retrieve specific API Call by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->id = '<ID>';

    $response = $sdk->apicall->getUnifiedApicall($request);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest](../../models/operations/GetUnifiedApicallRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse](../../models/operations/GetUnifiedApicallResponse.md)**


## listUnifiedApicalls

Returns API Calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUnifiedApicallsRequest();
    $request->connectionId = 'attentive';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-31T18:23:34.605Z');
    $request->env = 'Lead';
    $request->error = false;
    $request->externalXref = 'Krone';
    $request->integrationType = 'facilis';
    $request->limit = 5472.46;
    $request->offset = 9674.36;
    $request->order = 'dearly';
    $request->sort = 'Integration';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T19:38:01.045Z');

    $response = $sdk->apicall->listUnifiedApicalls($request);

    if ($response->apiCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest](../../models/operations/ListUnifiedApicallsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse](../../models/operations/ListUnifiedApicallsResponse.md)**

