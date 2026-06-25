# Enrich

## Overview

### Available Operations

* [listEnrichCompanies2](#listenrichcompanies2) - Retrieve enrichment information for a company
* [listEnrichPeople2](#listenrichpeople2) - Retrieve enrichment information for a person

## listEnrichCompanies2

Retrieve enrichment information for a company

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichCompanies2" method="get" path="/enrich/{connection_id}/company" -->
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

$request = new Operations\ListEnrichCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->enrich->listEnrichCompanies2(
    request: $request
);

if ($response->enrichCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListEnrichCompanies2Request](../../Models/Operations/ListEnrichCompanies2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListEnrichCompanies2Response](../../Models/Operations/ListEnrichCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEnrichPeople2

Retrieve enrichment information for a person

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichPeople2" method="get" path="/enrich/{connection_id}/person" -->
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

$request = new Operations\ListEnrichPeople2Request(
    connectionId: '<id>',
);

$response = $sdk->enrich->listEnrichPeople2(
    request: $request
);

if ($response->enrichPerson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListEnrichPeople2Request](../../Models/Operations/ListEnrichPeople2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListEnrichPeople2Response](../../Models/Operations/ListEnrichPeople2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |