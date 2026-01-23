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

Create an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsInsertionorder" method="post" path="/ads/{connection_id}/insertionorder" -->
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

$request = new Operations\CreateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(),
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

Retrieve an insertionorder

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

List all insertionorders

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

Update an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsInsertionorder" method="patch" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\PatchAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(),
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

Remove an insertionorder

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

Update an insertionorder

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsInsertionorder" method="put" path="/ads/{connection_id}/insertionorder/{id}" -->
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

$request = new Operations\UpdateAdsInsertionorderRequest(
    adsInsertionorder: new Shared\AdsInsertionorder(),
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