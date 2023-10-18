# Enrich
(*enrich*)

### Available Operations

* [listEnrichCompanies](#listenrichcompanies) - Retrieve enrichment information for a company
* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person

## listEnrichCompanies

Retrieve enrichment information for a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListEnrichCompaniesRequest();
    $request->connectionId = 'Bike';
    $request->domain = 'worse-herbs.info';
    $request->name = 'yippee';

    $response = $sdk->enrich->listEnrichCompanies($request);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListEnrichCompaniesRequest](../../models/operations/ListEnrichCompaniesRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListEnrichCompaniesResponse](../../models/operations/ListEnrichCompaniesResponse.md)**


## listEnrichPeople

Retrieve enrichment information for a person

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListEnrichPeopleRequest();
    $request->connectionId = 'Southwest';
    $request->email = 'Ari.Lindgren@hotmail.com';
    $request->linkedinUrl = 'bandwidth';
    $request->name = 'Organic';
    $request->twitter = 'eyeballs';

    $response = $sdk->enrich->listEnrichPeople($request);

    if ($response->enrichPerson !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListEnrichPeopleRequest](../../models/operations/ListEnrichPeopleRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListEnrichPeopleResponse](../../models/operations/ListEnrichPeopleResponse.md)**

