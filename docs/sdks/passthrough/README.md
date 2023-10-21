# Passthrough
(*passthrough*)

### Available Operations

* [createPassthrough](#createpassthrough) - Passthrough POST
* [listPassthroughs](#listpassthroughs) - Passthrough GET
* [patchPassthrough](#patchpassthrough) - Passthrough PUT
* [removePassthrough](#removepassthrough) - Passthrough DELETE
* [updatePassthrough](#updatepassthrough) - Passthrough PUT

## createPassthrough

Passthrough POST

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreatePassthroughRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreatePassthroughRequest();
    $request->connectionId = 'string';
    $request->path = '/etc/periodic';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->createPassthrough($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreatePassthroughRequest](../../models/operations/CreatePassthroughRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreatePassthroughResponse](../../models/operations/CreatePassthroughResponse.md)**


## listPassthroughs

Passthrough GET

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListPassthroughsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListPassthroughsRequest();
    $request->connectionId = 'string';
    $request->path = '/selinux';

    $response = $sdk->passthrough->listPassthroughs($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListPassthroughsRequest](../../models/operations/ListPassthroughsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPassthroughsResponse](../../models/operations/ListPassthroughsResponse.md)**


## patchPassthrough

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchPassthroughRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchPassthroughRequest();
    $request->connectionId = 'string';
    $request->path = '/mnt';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->patchPassthrough($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchPassthroughRequest](../../models/operations/PatchPassthroughRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPassthroughResponse](../../models/operations/PatchPassthroughResponse.md)**


## removePassthrough

Passthrough DELETE

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemovePassthroughRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemovePassthroughRequest();
    $request->connectionId = 'string';
    $request->path = '/Applications';

    $response = $sdk->passthrough->removePassthrough($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemovePassthroughRequest](../../models/operations/RemovePassthroughRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemovePassthroughResponse](../../models/operations/RemovePassthroughResponse.md)**


## updatePassthrough

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdatePassthroughRequest;
use \Unified\Unified_to\Models\Shared\Undefined;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdatePassthroughRequest();
    $request->connectionId = 'string';
    $request->path = '/dev';
    $request->undefined = new Undefined();

    $response = $sdk->passthrough->updatePassthrough($request);

    if ($response->undefined !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdatePassthroughRequest](../../models/operations/UpdatePassthroughRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdatePassthroughResponse](../../models/operations/UpdatePassthroughResponse.md)**

