<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to\UnifiedTo;
use Unified\Unified_to\Models\Shared\Security;
use Unified\Unified_to\Models\Operations\CreateTicketingAgentRequest;
use Unified\Unified_to\Models\Shared\TicketingAgent;
use Unified\Unified_to\Models\Shared\TicketingEmail;
use Unified\Unified_to\Models\Shared\TicketingEmailType;
use Unified\Unified_to\Models\Shared\PropertyTicketingAgentRaw;
use Unified\Unified_to\Models\Shared\TicketingTelephone;
use Unified\Unified_to\Models\Shared\TicketingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateTicketingAgentRequest();
    $request->ticketingAgent = new TicketingAgent();
    $request->ticketingAgent->createdAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2022-11-04T22:14:13.251Z',
    );
    $request->ticketingAgent->emails = [new TicketingEmail()];
    $request->ticketingAgent->id = '<ID>';
    $request->ticketingAgent->name = 'Vermont Belize Seaborgium';
    $request->ticketingAgent->raw = new PropertyTicketingAgentRaw();
    $request->ticketingAgent->telephones = [new TicketingTelephone()];
    $request->ticketingAgent->updatedAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2023-02-03T05:11:49.371Z',
    );
    $request->connectionId = 'Soul';
    $request->fields = ['intangible'];

    $response = $sdk->agent->createTicketingAgent($request);

    if ($response->ticketingAgent !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage -->