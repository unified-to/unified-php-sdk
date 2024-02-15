<!-- Start SDK Example Usage [usage] -->
```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 6602.56;
    $request->accountingAccount->createdAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2023-09-02T22:12:31.771Z',
    );
    $request->accountingAccount->currency = 'Saint Helena Pound';
    $request->accountingAccount->customerDefinedCode = '<value>';
    $request->accountingAccount->description = 'Cross-group zero defect task-force';
    $request->accountingAccount->id = '<id>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = '<value>';
    $request->accountingAccount->raw = [
        'Ruble' => '<value>',
    ];
    $request->accountingAccount->status = Shared\Status::Active;
    $request->accountingAccount->type = Shared\Type::FixedAsset;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat(
        'Y-m-d\TH:i:s+',
        '2024-10-01T23:54:12.882Z',
    );
    $request->connectionId = '<value>';

    $response = $sdk->accounting->createAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->