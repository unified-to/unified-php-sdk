<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAccountingAccountRequest(
        connectionId: '<value>',
        accountingAccount: new Shared\AccountingAccount(
            balance: 6602.56,
            createdAt: Utils\Utils::parseDateTime('2023-09-02T22:12:31.771Z'),
            currency: 'Saint Helena Pound',
            customerDefinedCode: '<value>',
            description: 'Cross-group zero defect task-force',
            group: '<value>',
            id: '<id>',
            isPayable: false,
            name: '<value>',
            parentAccountId: '<value>',
            raw: [
                'Ruble' => '<value>',
            ],
            section: '<value>',
            status: Shared\Status::Active,
            subgroup: '<value>',
            subsection: '<value>',
            type: Shared\Type::FixedAsset,
            updatedAt: Utils\Utils::parseDateTime('2024-10-01T23:54:12.882Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->accounting->createAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```
<!-- End SDK Example Usage [usage] -->