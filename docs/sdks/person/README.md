# Person
(*person*)

## Overview

### Available Operations

* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person

## listEnrichPeople

Retrieve enrichment information for a person

### Example Usage

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

$response = $sdk->person->listEnrichPeople(
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