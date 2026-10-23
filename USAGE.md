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
        description: 'Voluptatibus valde spoliatio.',
        id: '898bd106-40b2-43f3-9e8a-03eca401222f',
        isPayable: false,
        metadata: [],
        name: 'Auto Loan Account',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'vilitas',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'comedo',
            ),
        ],
        type: Shared\Type::AccountsReceivable,
        updatedAt: Utils\Utils::parseDateTime('2023-08-07T09:48:02.330Z'),
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