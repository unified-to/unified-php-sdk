# Profile

## Overview

### Available Operations

* [createCdpProfile](#createcdpprofile) - Create a profile
* [getCdpProfile](#getcdpprofile) - Retrieve a profile
* [getSocialProfile](#getsocialprofile) - Retrieve a profile
* [listCdpProfiles](#listcdpprofiles) - List all profiles
* [listSocialProfiles](#listsocialprofiles) - List all profiles
* [patchCdpProfile](#patchcdpprofile) - Update a profile
* [removeCdpProfile](#removecdpprofile) - Remove a profile
* [updateCdpProfile](#updatecdpprofile) - Update a profile

## createCdpProfile

Creates a CdpProfile. Provide the unified CdpProfile fields in the request body; they are mapped to the provider's API. Returns the created CdpProfile.

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

Retrieves a single CdpProfile by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

## getSocialProfile

Retrieves a single SocialProfile by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getSocialProfile" method="get" path="/social/{connection_id}/profile/{id}" -->
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

$request = new Operations\GetSocialProfileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profile->getSocialProfile(
    request: $request
);

if ($response->socialProfile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetSocialProfileRequest](../../Models/Operations/GetSocialProfileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetSocialProfileResponse](../../Models/Operations/GetSocialProfileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpProfiles

Returns a list of CdpProfiles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

## listSocialProfiles

Returns a list of SocialProfiles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listSocialProfiles" method="get" path="/social/{connection_id}/profile" -->
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

$request = new Operations\ListSocialProfilesRequest(
    connectionId: '<id>',
);

$response = $sdk->profile->listSocialProfiles(
    request: $request
);

if ($response->socialProfiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListSocialProfilesRequest](../../Models/Operations/ListSocialProfilesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListSocialProfilesResponse](../../Models/Operations/ListSocialProfilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpProfile

Updates the CdpProfile identified by `id`. Provide the unified CdpProfile fields to change in the request body.

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

Deletes the CdpProfile identified by `id`.

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

Updates the CdpProfile identified by `id`. Provide the unified CdpProfile fields to change in the request body.

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