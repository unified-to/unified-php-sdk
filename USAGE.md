<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAccountingAccountRequest(
    accountingAccount: new Shared\AccountingAccount(
        balance: 12092,
        createdAt: Utils\Utils::parseDateTime('2022-07-03T17:57:07.391Z'),
        currency: 'CAD',
        customerDefinedCode: '6170',
        description: 'Comedo vilitas harum cupiditate animus quo iste.',
        id: 'a96d13fd-b4cd-4c37-98b9-695b18f29e8e',
        isPayable: false,
        metadata: [],
        name: 'Savings Account',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'peccatus',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'vesper',
            ),
        ],
        type: Shared\Type::AccountsReceivable,
        updatedAt: Utils\Utils::parseDateTime('2023-08-16T01:01:45.535Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingAccount(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->