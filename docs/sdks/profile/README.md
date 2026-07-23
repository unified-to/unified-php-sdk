# Profile

## Overview

### Available Operations

* [createCdpProfile](#createcdpprofile) - Create a profile
* [getCdpProfile](#getcdpprofile) - Retrieve a profile
* [listCdpProfiles](#listcdpprofiles) - List all profiles
* [patchCdpProfile](#patchcdpprofile) - Update a profile
* [removeCdpProfile](#removecdpprofile) - Remove a profile
* [updateCdpProfile](#updatecdpprofile) - Update a profile

## createCdpProfile

Create a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpProfile" method="post" path="/cdp/{connection_id}/profile" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
);

$response = $sdk->profile->createCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateCdpProfileRequest](../../Models/Operations/CreateCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateCdpProfileResponse](../../Models/Operations/CreateCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpProfile

Retrieve a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpProfile" method="get" path="/cdp/{connection_id}/profile/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCdpProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profile->getCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetCdpProfileRequest](../../Models/Operations/GetCdpProfileRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetCdpProfileResponse](../../Models/Operations/GetCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpProfiles

List all profiles

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpProfiles" method="get" path="/cdp/{connection_id}/profile" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCdpProfilesRequest(
    connectionId: '<id>',
);

$response = $sdk->profile->listCdpProfiles(
    request: $request
);

if ($response->cdpProfiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListCdpProfilesRequest](../../Models/Operations/ListCdpProfilesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListCdpProfilesResponse](../../Models/Operations/ListCdpProfilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpProfile

Update a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpProfile" method="patch" path="/cdp/{connection_id}/profile/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profile->patchCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchCdpProfileRequest](../../Models/Operations/PatchCdpProfileRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchCdpProfileResponse](../../Models/Operations/PatchCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpProfile

Remove a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpProfile" method="delete" path="/cdp/{connection_id}/profile/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCdpProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profile->removeCdpProfile(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveCdpProfileRequest](../../Models/Operations/RemoveCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveCdpProfileResponse](../../Models/Operations/RemoveCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpProfile

Update a profile

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpProfile" method="put" path="/cdp/{connection_id}/profile/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCdpProfileRequest(
    cdpProfile: new Shared\CdpProfile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profile->updateCdpProfile(
    request: $request
);

if ($response->cdpProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateCdpProfileRequest](../../Models/Operations/UpdateCdpProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateCdpProfileResponse](../../Models/Operations/UpdateCdpProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |