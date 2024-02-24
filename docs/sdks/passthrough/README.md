# Passthrough


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

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreatePassthroughRequest();
    $request->requestBody = [
        'turquoise' => '<value>',
    ];
    $request->connectionId = '<value>';
    $request->path = '/var';;

    $requestSecurity = new Operations\CreatePassthroughSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->passthrough->createPassthrough($request, $requestSecurity);

    if ($response->result !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreatePassthroughRequest](../../Models/Operations/CreatePassthroughRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreatePassthroughSecurity](../../Models/Operations/CreatePassthroughSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\CreatePassthroughResponse](../../Models/Operations/CreatePassthroughResponse.md)**


## listPassthroughs

Passthrough GET

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListPassthroughsRequest();
    $request->connectionId = '<value>';
    $request->path = '/selinux';;

    $requestSecurity = new Operations\ListPassthroughsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->passthrough->listPassthroughs($request, $requestSecurity);

    if ($response->result !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListPassthroughsRequest](../../Models/Operations/ListPassthroughsRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListPassthroughsSecurity](../../Models/Operations/ListPassthroughsSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPassthroughsResponse](../../Models/Operations/ListPassthroughsResponse.md)**


## patchPassthrough

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchPassthroughRequest();
    $request->requestBody = [
        'brand' => '<value>',
    ];
    $request->connectionId = '<value>';
    $request->path = '/var/mail';;

    $requestSecurity = new Operations\PatchPassthroughSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->passthrough->patchPassthrough($request, $requestSecurity);

    if ($response->result !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchPassthroughRequest](../../Models/Operations/PatchPassthroughRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchPassthroughSecurity](../../Models/Operations/PatchPassthroughSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPassthroughResponse](../../Models/Operations/PatchPassthroughResponse.md)**


## removePassthrough

Passthrough DELETE

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemovePassthroughRequest();
    $request->connectionId = '<value>';
    $request->path = '/Applications';;

    $requestSecurity = new Operations\RemovePassthroughSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->passthrough->removePassthrough($request, $requestSecurity);

    if ($response->result !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemovePassthroughRequest](../../Models/Operations/RemovePassthroughRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemovePassthroughSecurity](../../Models/Operations/RemovePassthroughSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\RemovePassthroughResponse](../../Models/Operations/RemovePassthroughResponse.md)**


## updatePassthrough

Passthrough PUT

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdatePassthroughRequest();
    $request->requestBody = [
        'Northwest' => '<value>',
    ];
    $request->connectionId = '<value>';
    $request->path = '/var/mail';;

    $requestSecurity = new Operations\UpdatePassthroughSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->passthrough->updatePassthrough($request, $requestSecurity);

    if ($response->result !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdatePassthroughRequest](../../Models/Operations/UpdatePassthroughRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdatePassthroughSecurity](../../Models/Operations/UpdatePassthroughSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdatePassthroughResponse](../../Models/Operations/UpdatePassthroughResponse.md)**

