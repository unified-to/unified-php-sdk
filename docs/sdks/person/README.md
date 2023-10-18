# Person
(*person*)

### Available Operations

* [listEnrichPeople](#listenrichpeople) - Retrieve enrichment information for a person

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

    $response = $sdk->person->listEnrichPeople($request);

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

