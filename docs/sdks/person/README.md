# person

### Available Operations

* [getEnrichConnectionIdPerson](#getenrichconnectionidperson) - Retrieve enrichment information for a person

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
    $request->connectionId = 'ea';
    $request->email = 'Broderick_Mosciski@hotmail.com';
    $request->linkedinUrl = 'saepe';
    $request->name = 'Craig Hamill';
    $request->twitter = 'veniam';

    $requestSecurity = new GetEnrichConnectionIdPersonSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->person->getEnrichConnectionIdPerson($request, $requestSecurity);

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

