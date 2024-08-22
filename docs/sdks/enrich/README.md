# Enrich

## Overview

### Available Operations

* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person

## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListEnrichCompaniesRequest(
        connectionId: '<value>',
        domain: 'dismal-cornmeal.org',
        name: '<value>',
    );
    $response = $sdk->enrich->listEnrichCompanies($request);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListEnrichCompaniesRequest](../../Models/Operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListEnrichCompaniesResponse](../../Models/Operations/ListEnrichCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listEnrichPeople

Retrieve enrichment information for a person

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListEnrichPeopleRequest(
        connectionId: '<value>',
        companyName: 'Stanton LLC',
        email: 'Kamille53@gmail.com',
        linkedinUrl: '<value>',
        name: '<value>',
        twitter: '<value>',
    );
    $response = $sdk->enrich->listEnrichPeople($request);

    if ($response->enrichPerson !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListEnrichPeopleRequest](../../Models/Operations/ListEnrichPeopleRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListEnrichPeopleResponse](../../Models/Operations/ListEnrichPeopleResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
