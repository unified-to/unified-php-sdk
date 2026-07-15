# Taxonomy

## Overview

### Available Operations

* [getHrisTaxonomy](#gethristaxonomy) - Retrieve a taxonomy
* [listHrisTaxonomies](#listhristaxonomies) - List all taxonomies

## getHrisTaxonomy

Retrieve a taxonomy

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTaxonomy" method="get" path="/hris/{connection_id}/taxonomy/{id}" -->
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

$request = new Operations\GetHrisTaxonomyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxonomy->getHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisTaxonomyRequest](../../Models/Operations/GetHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisTaxonomyResponse](../../Models/Operations/GetHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTaxonomies

List all taxonomies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTaxonomies" method="get" path="/hris/{connection_id}/taxonomy" -->
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

$request = new Operations\ListHrisTaxonomiesRequest(
    connectionId: '<id>',
);

$response = $sdk->taxonomy->listHrisTaxonomies(
    request: $request
);

if ($response->hrisTaxonomies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisTaxonomiesRequest](../../Models/Operations/ListHrisTaxonomiesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisTaxonomiesResponse](../../Models/Operations/ListHrisTaxonomiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |