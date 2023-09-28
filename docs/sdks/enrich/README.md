# Enrich
(*enrich*)

### Available Operations

* [getEnrichConnectionIdCompany](#getenrichconnectionidcompany) - Retrieve enrichment information for a company
* [getEnrichConnectionIdPerson](#getenrichconnectionidperson) - Retrieve enrichment information for a person

## getEnrichConnectionIdCompany

Retrieve enrichment information for a company

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetEnrichConnectionIdCompanyRequest();
    $request->connectionId = 'female Computers Central';
    $request->domain = 'scientific-facet.biz';
    $request->name = 'Outdoors embrace interface';

    $response = $sdk->enrich->getEnrichConnectionIdCompany($request);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest](../../models/operations/GetEnrichConnectionIdCompanyRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyResponse](../../models/operations/GetEnrichConnectionIdCompanyResponse.md)**


## getEnrichConnectionIdPerson

Retrieve enrichment information for a person

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetEnrichConnectionIdPersonRequest();
    $request->connectionId = 'Iowa Account';
    $request->email = 'Jaiden_Weimann24@gmail.com';
    $request->linkedinUrl = 'paradigms integrate Creative';
    $request->name = 'Investment';
    $request->twitter = 'Hills';

    $response = $sdk->enrich->getEnrichConnectionIdPerson($request);

    if ($response->enrichPerson !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest](../../models/operations/GetEnrichConnectionIdPersonRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonResponse](../../models/operations/GetEnrichConnectionIdPersonResponse.md)**

