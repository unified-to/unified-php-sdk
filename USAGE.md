<!-- Start SDK Example Usage -->


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to\UnifiedTo;
use Unified\Unified_to\Models\Shared\Security;
use Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest;
use Unified\Unified_to\Models\Shared\AccountingCustomer;
use Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use Unified\Unified_to\Models\Shared\AccountingEmail;
use Unified\Unified_to\Models\Shared\AccountingEmailType;
use Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use Unified\Unified_to\Models\Shared\AccountingTelephone;
use Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
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
    $request->accountingCustomer->emails = [new AccountingEmail()];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::LocalGov;
    $request->accountingCustomer->telephones = [new AccountingTelephone()];
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
<!-- End SDK Example Usage -->