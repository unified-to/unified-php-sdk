# passthrough

### Available Operations

* [deletePassthroughConnectionIdPath](#deletepassthroughconnectionidpath) - Passthrough DELETE
* [getPassthroughConnectionIdPath](#getpassthroughconnectionidpath) - Passthrough GET
* [patchPassthroughConnectionIdPath](#patchpassthroughconnectionidpath) - Passthrough PUT
* [postPassthroughConnectionIdPath](#postpassthroughconnectionidpath) - Passthrough POST
* [putPassthroughConnectionIdPath](#putpassthroughconnectionidpath) - Passthrough PUT

## deletePassthroughConnectionIdPath

Passthrough DELETE

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeletePassthroughConnectionIdPathRequest();
    $request->connectionId = 'velit';
    $request->path = 'doloribus';

    $requestSecurity = new DeletePassthroughConnectionIdPathSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->passthrough->deletePassthroughConnectionIdPath($request, $requestSecurity);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathRequest](../../models/operations/DeletePassthroughConnectionIdPathRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathSecurity](../../models/operations/DeletePassthroughConnectionIdPathSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathResponse](../../models/operations/DeletePassthroughConnectionIdPathResponse.md)**


## getPassthroughConnectionIdPath

Passthrough GET

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetPassthroughConnectionIdPathRequest();
    $request->connectionId = 'nulla';
    $request->path = 'ex';

    $requestSecurity = new GetPassthroughConnectionIdPathSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->passthrough->getPassthroughConnectionIdPath($request, $requestSecurity);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathRequest](../../models/operations/GetPassthroughConnectionIdPathRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathSecurity](../../models/operations/GetPassthroughConnectionIdPathSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathResponse](../../models/operations/GetPassthroughConnectionIdPathResponse.md)**


## patchPassthroughConnectionIdPath

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;
use \Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchPassthroughConnectionIdPathRequest();
    $request->connectionId = 'cumque';
    $request->path = 'magni';
    $request->undefined = new Undefined();

    $requestSecurity = new PatchPassthroughConnectionIdPathSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->passthrough->patchPassthroughConnectionIdPath($request, $requestSecurity);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathRequest](../../models/operations/PatchPassthroughConnectionIdPathRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathSecurity](../../models/operations/PatchPassthroughConnectionIdPathSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathResponse](../../models/operations/PatchPassthroughConnectionIdPathResponse.md)**


## postPassthroughConnectionIdPath

Passthrough POST

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;
use \Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostPassthroughConnectionIdPathRequest();
    $request->connectionId = 'animi';
    $request->path = 'sunt';
    $request->undefined = new Undefined();

    $requestSecurity = new PostPassthroughConnectionIdPathSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->passthrough->postPassthroughConnectionIdPath($request, $requestSecurity);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathRequest](../../models/operations/PostPassthroughConnectionIdPathRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathSecurity](../../models/operations/PostPassthroughConnectionIdPathSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathResponse](../../models/operations/PostPassthroughConnectionIdPathResponse.md)**


## putPassthroughConnectionIdPath

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;
use \Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutPassthroughConnectionIdPathRequest();
    $request->connectionId = 'voluptatem';
    $request->path = 'saepe';
    $request->undefined = new Undefined();

    $requestSecurity = new PutPassthroughConnectionIdPathSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->passthrough->putPassthroughConnectionIdPath($request, $requestSecurity);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathRequest](../../models/operations/PutPassthroughConnectionIdPathRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathSecurity](../../models/operations/PutPassthroughConnectionIdPathSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathResponse](../../models/operations/PutPassthroughConnectionIdPathResponse.md)**

