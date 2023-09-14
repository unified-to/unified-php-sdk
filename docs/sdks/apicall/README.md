# apicall

### Available Operations

* [getUnifiedApicall](#getunifiedapicall) - Returns API Calls
* [getUnifiedApicallId](#getunifiedapicallid) - Retrieve specific API Call by its ID

## getUnifiedApicall

Returns API Calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->connectionId = 'quibusdam';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-04T19:17:08.641Z');
    $request->env = 'pariatur';
    $request->error = false;
    $request->externalXref = 'accusantium';
    $request->integrationType = 'consequuntur';
    $request->limit = 5083.15;
    $request->offset = 6155.6;
    $request->order = 'magni';
    $request->sort = 'sunt';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-16T10:20:37.479Z');

    $requestSecurity = new GetUnifiedApicallSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->apicall->getUnifiedApicall($request, $requestSecurity);

    if ($response->apiCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest](../../models/operations/GetUnifiedApicallRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity](../../models/operations/GetUnifiedApicallSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse](../../models/operations/GetUnifiedApicallResponse.md)**


## getUnifiedApicallId

Retrieve specific API Call by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallIdRequest();
    $request->id = 'dc692601-fb57-46b0-95f0-d30c5fbb2587';

    $requestSecurity = new GetUnifiedApicallIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->apicall->getUnifiedApicallId($request, $requestSecurity);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest](../../models/operations/GetUnifiedApicallIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity](../../models/operations/GetUnifiedApicallIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdResponse](../../models/operations/GetUnifiedApicallIdResponse.md)**

