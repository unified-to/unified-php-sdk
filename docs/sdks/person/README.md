# Person

## Overview

### Available Operations

* [getUnifiedPerson](#getunifiedperson) - Retrieve a person by ID
* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person
* [listUnifiedPeople](#listunifiedpeople) - Search for persons by email addresses
* [removeUnifiedPerson](#removeunifiedperson) - Erase email addresses from the unified persons

## getUnifiedPerson

Retrieve a person by ID

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedPerson" method="get" path="/unified/person/{id}" -->
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

$request = new Operations\GetUnifiedPersonRequest(
    id: '<id>',
);

$response = $sdk->person->getUnifiedPerson(
    request: $request
);

if ($response->person !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetUnifiedPersonRequest](../../Models/Operations/GetUnifiedPersonRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetUnifiedPersonResponse](../../Models/Operations/GetUnifiedPersonResponse.md)**

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

## listUnifiedPeople

Search for persons by email addresses

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedPeople" method="get" path="/unified/person" -->
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

$request = new Operations\ListUnifiedPeopleRequest(
    query: '<value>',
);

$response = $sdk->person->listUnifiedPeople(
    request: $request
);

if ($response->people !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUnifiedPeopleRequest](../../Models/Operations/ListUnifiedPeopleRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUnifiedPeopleResponse](../../Models/Operations/ListUnifiedPeopleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedPerson

Erase email addresses from the unified persons

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedPerson" method="delete" path="/unified/person" -->
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

$request = new Operations\RemoveUnifiedPersonRequest(
    query: '<value>',
);

$response = $sdk->person->removeUnifiedPerson(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveUnifiedPersonRequest](../../Models/Operations/RemoveUnifiedPersonRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveUnifiedPersonResponse](../../Models/Operations/RemoveUnifiedPersonResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |