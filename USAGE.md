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
        currency: 'BOB',
        customerDefinedCode: 'quo',
        description: 'Spoliatio comedo vilitas harum cupiditate.',
        id: 'fe4277ef-5da1-4ca9-9359-50f8d62f8e9f',
        isPayable: true,
        name: 'Electronic Aluminum Tuna',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'vesper',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'iste',
            ),
            new Shared\AccountingAccountTaxonomy(
                originalType: 'adamo',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'peccatus',
            ),
        ],
        type: Shared\Type::Bank,
        updatedAt: Utils\Utils::parseDateTime('2023-01-03T11:11:55.467Z'),
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