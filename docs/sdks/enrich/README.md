# Enrich
(*enrich*)

## Overview

### Available Operations

* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person

## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichCompanies" method="get" path="/enrich/{connection_id}/company" -->
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

$request = new Operations\ListEnrichCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->enrich->listEnrichCompanies(
    request: $request
);

if ($response->enrichCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListEnrichCompaniesRequest](../../Models/Operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListEnrichCompaniesResponse](../../Models/Operations/ListEnrichCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEnrichPeople

Retrieve enrichment information for a person

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichPeople" method="get" path="/enrich/{connection_id}/person" -->
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

$request = new Operations\ListEnrichPeopleRequest(
    connectionId: '<id>',
);

$response = $sdk->enrich->listEnrichPeople(
    request: $request
);

if ($response->enrichPerson !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListEnrichPeopleRequest](../../Models/Operations/ListEnrichPeopleRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListEnrichPeopleResponse](../../Models/Operations/ListEnrichPeopleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |