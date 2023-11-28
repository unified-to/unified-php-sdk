<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'New Raulfield';
    $request->accountingCustomer->billingAddress->country = 'Libyan Arab Jamahiriya';
    $request->accountingCustomer->billingAddress->countryCode = 'IN';
    $request->accountingCustomer->billingAddress->postalCode = '22232';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2021-07-22T19:16:48.798Z',
    );
    $request->accountingCustomer->currency = 'Dalasi';
    $request->accountingCustomer->emails = [new Shared\AccountingEmail()];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::LocalGov;
    $request->accountingCustomer->telephones = [new Shared\AccountingTelephone()];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2021-08-06T21:49:52.773Z',
    );
    $request->connectionId = 'string';

    $response = $sdk->accounting->createAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->