# Enrich

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
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanySecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetEnrichConnectionIdCompanyRequest();
    $request->connectionId = 'eum';
    $request->domain = 'doloremque';
    $request->name = 'Dr. Audrey Runolfsdottir';

    $requestSecurity = new GetEnrichConnectionIdCompanySecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->enrich->getEnrichConnectionIdCompany($request, $requestSecurity);

    if ($response->enrichCompany !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanyRequest](../../models/operations/GetEnrichConnectionIdCompanyRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdCompanySecurity](../../models/operations/GetEnrichConnectionIdCompanySecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


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
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest;
use \Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetEnrichConnectionIdPersonRequest();
    $request->connectionId = 'culpa';
    $request->email = 'Verner73@yahoo.com';
    $request->linkedinUrl = 'molestias';
    $request->name = 'Candace Braun';
    $request->twitter = 'eligendi';

    $requestSecurity = new GetEnrichConnectionIdPersonSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->enrich->getEnrichConnectionIdPerson($request, $requestSecurity);

    if ($response->enrichPerson !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonRequest](../../models/operations/GetEnrichConnectionIdPersonRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonSecurity](../../models/operations/GetEnrichConnectionIdPersonSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetEnrichConnectionIdPersonResponse](../../models/operations/GetEnrichConnectionIdPersonResponse.md)**

