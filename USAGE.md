<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to\UnifiedTo;
use Unified\Unified_to\Models\Shared\Security;
use Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'navigate';
    $request->id = '<ID>';

    $response = $sdk->agent->deleteTicketingConnectionIdAgentId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->