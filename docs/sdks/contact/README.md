# Contact

## Overview

### Available Operations

* [createAccountingContact2](#createaccountingcontact2) - Create a contact
* [createCrmContact2](#createcrmcontact2) - Create a contact
* [createUcContact2](#createuccontact2) - Create a contact
* [getAccountingContact2](#getaccountingcontact2) - Retrieve a contact
* [getCrmContact2](#getcrmcontact2) - Retrieve a contact
* [getUcContact2](#getuccontact2) - Retrieve a contact
* [listAccountingContacts2](#listaccountingcontacts2) - List all contacts
* [listCrmContacts2](#listcrmcontacts2) - List all contacts
* [listUcContacts2](#listuccontacts2) - List all contacts
* [patchAccountingContact2](#patchaccountingcontact2) - Update a contact
* [patchCrmContact2](#patchcrmcontact2) - Update a contact
* [patchUcContact2](#patchuccontact2) - Update a contact
* [removeAccountingContact2](#removeaccountingcontact2) - Remove a contact
* [removeCrmContact2](#removecrmcontact2) - Remove a contact
* [removeUcContact2](#removeuccontact2) - Remove a contact
* [updateAccountingContact2](#updateaccountingcontact2) - Update a contact
* [updateCrmContact2](#updatecrmcontact2) - Update a contact
* [updateUcContact2](#updateuccontact2) - Update a contact

## createAccountingContact2

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingContact2" method="post" path="/accounting/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAccountingContact2Request(
    accountingContact: new Shared\AccountingContact(),
    connectionId: '<id>',
);

$response = $sdk->contact->createAccountingContact2(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingContact2Request](../../Models/Operations/CreateAccountingContact2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingContact2Response](../../Models/Operations/CreateAccountingContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmContact2

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmContact2" method="post" path="/crm/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
);

$response = $sdk->contact->createCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmContact2Request](../../Models/Operations/CreateCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmContact2Response](../../Models/Operations/CreateCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUcContact2

Create a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="createUcContact2" method="post" path="/uc/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
);

$response = $sdk->contact->createUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateUcContact2Request](../../Models/Operations/CreateUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateUcContact2Response](../../Models/Operations/CreateUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingContact2

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingContact2" method="get" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAccountingContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getAccountingContact2(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingContact2Request](../../Models/Operations/GetAccountingContact2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingContact2Response](../../Models/Operations/GetAccountingContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmContact2

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmContact2" method="get" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCrmContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmContact2Request](../../Models/Operations/GetCrmContact2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmContact2Response](../../Models/Operations/GetCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUcContact2

Retrieve a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcContact2" method="get" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUcContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->getUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetUcContact2Request](../../Models/Operations/GetUcContact2Request.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetUcContact2Response](../../Models/Operations/GetUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingContacts2

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingContacts2" method="get" path="/accounting/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAccountingContacts2Request(
    connectionId: '<id>',
);

$response = $sdk->contact->listAccountingContacts2(
    request: $request
);

if ($response->accountingContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingContacts2Request](../../Models/Operations/ListAccountingContacts2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingContacts2Response](../../Models/Operations/ListAccountingContacts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmContacts2

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmContacts2" method="get" path="/crm/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCrmContacts2Request(
    connectionId: '<id>',
);

$response = $sdk->contact->listCrmContacts2(
    request: $request
);

if ($response->crmContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmContacts2Request](../../Models/Operations/ListCrmContacts2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmContacts2Response](../../Models/Operations/ListCrmContacts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcContacts2

List all contacts

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcContacts2" method="get" path="/uc/{connection_id}/contact" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListUcContacts2Request(
    connectionId: '<id>',
);

$response = $sdk->contact->listUcContacts2(
    request: $request
);

if ($response->ucContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListUcContacts2Request](../../Models/Operations/ListUcContacts2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListUcContacts2Response](../../Models/Operations/ListUcContacts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingContact2" method="patch" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAccountingContact2Request(
    accountingContact: new Shared\AccountingContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchAccountingContact2(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingContact2Request](../../Models/Operations/PatchAccountingContact2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingContact2Response](../../Models/Operations/PatchAccountingContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmContact2" method="patch" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmContact2Request](../../Models/Operations/PatchCrmContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmContact2Response](../../Models/Operations/PatchCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUcContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUcContact2" method="patch" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->patchUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchUcContact2Request](../../Models/Operations/PatchUcContact2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchUcContact2Response](../../Models/Operations/PatchUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingContact2

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingContact2" method="delete" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAccountingContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeAccountingContact2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingContact2Request](../../Models/Operations/RemoveAccountingContact2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingContact2Response](../../Models/Operations/RemoveAccountingContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmContact2

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmContact2" method="delete" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCrmContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeCrmContact2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmContact2Request](../../Models/Operations/RemoveCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmContact2Response](../../Models/Operations/RemoveCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUcContact2

Remove a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUcContact2" method="delete" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUcContact2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->removeUcContact2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveUcContact2Request](../../Models/Operations/RemoveUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveUcContact2Response](../../Models/Operations/RemoveUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingContact2" method="put" path="/accounting/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAccountingContact2Request(
    accountingContact: new Shared\AccountingContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateAccountingContact2(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingContact2Request](../../Models/Operations/UpdateAccountingContact2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingContact2Response](../../Models/Operations/UpdateAccountingContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmContact2" method="put" path="/crm/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCrmContact2Request(
    crmContact: new Shared\CrmContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateCrmContact2(
    request: $request
);

if ($response->crmContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmContact2Request](../../Models/Operations/UpdateCrmContact2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmContact2Response](../../Models/Operations/UpdateCrmContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUcContact2

Update a contact

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUcContact2" method="put" path="/uc/{connection_id}/contact/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUcContact2Request(
    ucContact: new Shared\UcContact(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->contact->updateUcContact2(
    request: $request
);

if ($response->ucContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateUcContact2Request](../../Models/Operations/UpdateUcContact2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateUcContact2Response](../../Models/Operations/UpdateUcContact2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |