# Passthrough

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeletePassthroughConnectionIdPathRequest();
    $request->connectionId = 'officia';
    $request->path = 'veniam';

    $response = $sdk->passthrough->deletePassthroughConnectionIdPath($request);

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
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeletePassthroughConnectionIdPathRequest](../../models/operations/DeletePassthroughConnectionIdPathRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetPassthroughConnectionIdPathRequest();
    $request->connectionId = 'cum';
    $request->path = 'voluptatem';

    $response = $sdk->passthrough->getPassthroughConnectionIdPath($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetPassthroughConnectionIdPathRequest](../../models/operations/GetPassthroughConnectionIdPathRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchPassthroughConnectionIdPathRequest();
    $request->connectionId = 'sint';
    $request->path = 'consequuntur';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->patchPassthroughConnectionIdPath($request);

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
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchPassthroughConnectionIdPathRequest](../../models/operations/PatchPassthroughConnectionIdPathRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostPassthroughConnectionIdPathRequest();
    $request->connectionId = 'magni';
    $request->path = 'iure';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->postPassthroughConnectionIdPath($request);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostPassthroughConnectionIdPathRequest](../../models/operations/PostPassthroughConnectionIdPathRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutPassthroughConnectionIdPathRequest();
    $request->connectionId = 'doloribus';
    $request->path = 'quod';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->putPassthroughConnectionIdPath($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathRequest](../../models/operations/PutPassthroughConnectionIdPathRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PutPassthroughConnectionIdPathResponse](../../models/operations/PutPassthroughConnectionIdPathResponse.md)**

