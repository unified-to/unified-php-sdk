# Insertionorder

## Overview

### Available Operations

* [createAdsInsertionorder](#createadsinsertionorder) - Create an insertionorder
* [getAdsInsertionorder](#getadsinsertionorder) - Retrieve an insertionorder
* [listAdsInsertionorders](#listadsinsertionorders) - List all insertionorders
* [patchAdsInsertionorder](#patchadsinsertionorder) - Update an insertionorder
* [removeAdsInsertionorder](#removeadsinsertionorder) - Remove an insertionorder
* [updateAdsInsertionorder](#updateadsinsertionorder) - Update an insertionorder

## createAdsInsertionorder

Creates a AdsInsertionorder. Provide the unified AdsInsertionorder fields in the request body; they are mapped to the provider's API. Returns the created AdsInsertionorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsInsertionorder" method="post" path="/ads/{connection_id}/insertionorder" example="ads_insertionorder" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: 'f54b4604-c982-48be-93c5-2b6840f65781',
        metadata: [],
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T20:40:49.597Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->insertionorder->createAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAdsInsertionorderRequest](../../Models/Operations/CreateAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAdsInsertionorderResponse](../../Models/Operations/CreateAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsInsertionorder

Retrieves a single AdsInsertionorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsInsertionorder" method="get" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\GetAdsInsertionorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->insertionorder->getAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAdsInsertionorderRequest](../../Models/Operations/GetAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAdsInsertionorderResponse](../../Models/Operations/GetAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsInsertionorders

Returns a list of AdsInsertionorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsInsertionorders" method="get" path="/ads/{connection_id}/insertionorder" -->
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

$request = new Operations\ListAdsInsertionordersRequest(
    connectionId: '<id>',
);

$response = $sdk->insertionorder->listAdsInsertionorders(
    request: $request
);

if ($response->adsInsertionorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAdsInsertionordersRequest](../../Models/Operations/ListAdsInsertionordersRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAdsInsertionordersResponse](../../Models/Operations/ListAdsInsertionordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAdsInsertionorder

Updates the AdsInsertionorder identified by `id`. Provide the unified AdsInsertionorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsInsertionorder" method="patch" path="/ads/{connection_id}/insertionorder/{id}" example="ads_insertionorder" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: '00280818-5571-48c2-95d7-fa86dba86a48',
        metadata: [],
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T20:40:49.598Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->insertionorder->patchAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAdsInsertionorderRequest](../../Models/Operations/PatchAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAdsInsertionorderResponse](../../Models/Operations/PatchAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAdsInsertionorder

Deletes the AdsInsertionorder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsInsertionorder" method="delete" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\RemoveAdsInsertionorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->insertionorder->removeAdsInsertionorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAdsInsertionorderRequest](../../Models/Operations/RemoveAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAdsInsertionorderResponse](../../Models/Operations/RemoveAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAdsInsertionorder

Updates the AdsInsertionorder identified by `id`. Provide the unified AdsInsertionorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsInsertionorder" method="put" path="/ads/{connection_id}/insertionorder/{id}" example="ads_insertionorder" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(
        createdAt: Utils\Utils::parseDateTime('2021-04-10T06:57:36.611Z'),
        id: '00280818-5571-48c2-95d7-fa86dba86a48',
        metadata: [],
        name: 'Kunde, Smith and Reinger',
        status: Shared\AdsInsertionorderStatus::Unspecified,
        updatedAt: Utils\Utils::parseDateTime('2021-04-28T20:40:49.598Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->insertionorder->updateAdsInsertionorder(
    request: $request
);

if ($response->adsInsertionorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAdsInsertionorderRequest](../../Models/Operations/UpdateAdsInsertionorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAdsInsertionorderResponse](../../Models/Operations/UpdateAdsInsertionorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |