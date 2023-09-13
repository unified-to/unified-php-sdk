<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteTicketingConnectionIdAgentIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteTicketingConnectionIdAgentIdRequest();
    $request->connectionId = 'corrupti';
    $request->id = '9bd9d8d6-9a67-44e0-b467-cc8796ed151a';

    $requestSecurity = new DeleteTicketingConnectionIdAgentIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->agent->deleteTicketingConnectionIdAgentId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```
<!-- End SDK Example Usage -->