<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to\UnifiedTo;
use Unified\Unified_to\Models\Shared\Security;
use Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->id = '<ID>';

    $response = $sdk->apicall->getUnifiedApicall($request);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->