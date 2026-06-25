# Campaign

## Overview

### Available Operations

* [createAdsCampaign2](#createadscampaign2) - Create a campaign
* [createMartechCampaign2](#createmartechcampaign2) - Create a campaign
* [getAdsCampaign2](#getadscampaign2) - Retrieve a campaign
* [getMartechCampaign2](#getmartechcampaign2) - Retrieve a campaign
* [listAdsCampaigns2](#listadscampaigns2) - List all campaigns
* [listMartechCampaigns2](#listmartechcampaigns2) - List all campaigns
* [patchAdsCampaign2](#patchadscampaign2) - Update a campaign
* [patchMartechCampaign2](#patchmartechcampaign2) - Update a campaign
* [removeAdsCampaign2](#removeadscampaign2) - Remove a campaign
* [removeMartechCampaign2](#removemartechcampaign2) - Remove a campaign
* [updateAdsCampaign2](#updateadscampaign2) - Update a campaign
* [updateMartechCampaign2](#updatemartechcampaign2) - Update a campaign

## createAdsCampaign2

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsCampaign2" method="post" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\CreateAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
);

$response = $sdk->campaign->createAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAdsCampaign2Request](../../Models/Operations/CreateAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAdsCampaign2Response](../../Models/Operations/CreateAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createMartechCampaign2

Create a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="createMartechCampaign2" method="post" path="/martech/{connection_id}/campaign" -->
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

$request = new Operations\CreateMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
);

$response = $sdk->campaign->createMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMartechCampaign2Request](../../Models/Operations/CreateMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMartechCampaign2Response](../../Models/Operations/CreateMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsCampaign2

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsCampaign2" method="get" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetAdsCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->getAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsCampaign2Request](../../Models/Operations/GetAdsCampaign2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsCampaign2Response](../../Models/Operations/GetAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMartechCampaign2

Retrieve a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="getMartechCampaign2" method="get" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\GetMartechCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->getMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMartechCampaign2Request](../../Models/Operations/GetMartechCampaign2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMartechCampaign2Response](../../Models/Operations/GetMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsCampaigns2

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsCampaigns2" method="get" path="/ads/{connection_id}/campaign" -->
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

$request = new Operations\ListAdsCampaigns2Request(
    connectionId: '<id>',
);

$response = $sdk->campaign->listAdsCampaigns2(
    request: $request
);

if ($response->adsCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsCampaigns2Request](../../Models/Operations/ListAdsCampaigns2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsCampaigns2Response](../../Models/Operations/ListAdsCampaigns2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMartechCampaigns2

List all campaigns

### Example Usage

<!-- UsageSnippet language="php" operationID="listMartechCampaigns2" method="get" path="/martech/{connection_id}/campaign" -->
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

$request = new Operations\ListMartechCampaigns2Request(
    connectionId: '<id>',
);

$response = $sdk->campaign->listMartechCampaigns2(
    request: $request
);

if ($response->marketingCampaigns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMartechCampaigns2Request](../../Models/Operations/ListMartechCampaigns2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMartechCampaigns2Response](../../Models/Operations/ListMartechCampaigns2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsCampaign2" method="patch" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\PatchAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->patchAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAdsCampaign2Request](../../Models/Operations/PatchAdsCampaign2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAdsCampaign2Response](../../Models/Operations/PatchAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMartechCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMartechCampaign2" method="patch" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\PatchMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->patchMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMartechCampaign2Request](../../Models/Operations/PatchMartechCampaign2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMartechCampaign2Response](../../Models/Operations/PatchMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsCampaign2

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsCampaign2" method="delete" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveAdsCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->removeAdsCampaign2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAdsCampaign2Request](../../Models/Operations/RemoveAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAdsCampaign2Response](../../Models/Operations/RemoveAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMartechCampaign2

Remove a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMartechCampaign2" method="delete" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\RemoveMartechCampaign2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->removeMartechCampaign2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMartechCampaign2Request](../../Models/Operations/RemoveMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMartechCampaign2Response](../../Models/Operations/RemoveMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsCampaign2" method="put" path="/ads/{connection_id}/campaign/{id}" -->
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

$request = new Operations\UpdateAdsCampaign2Request(
    adsCampaign: new Shared\AdsCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->updateAdsCampaign2(
    request: $request
);

if ($response->adsCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAdsCampaign2Request](../../Models/Operations/UpdateAdsCampaign2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAdsCampaign2Response](../../Models/Operations/UpdateAdsCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMartechCampaign2

Update a campaign

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMartechCampaign2" method="put" path="/martech/{connection_id}/campaign/{id}" -->
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

$request = new Operations\UpdateMartechCampaign2Request(
    marketingCampaign: new Shared\MarketingCampaign(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->campaign->updateMartechCampaign2(
    request: $request
);

if ($response->marketingCampaign !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMartechCampaign2Request](../../Models/Operations/UpdateMartechCampaign2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMartechCampaign2Response](../../Models/Operations/UpdateMartechCampaign2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |