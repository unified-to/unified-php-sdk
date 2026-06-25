# Company

## Overview

### Available Operations

* [createAtsCompany2](#createatscompany2) - Create a company
* [createCrmCompany2](#createcrmcompany2) - Create a company
* [createHrisCompany2](#createhriscompany2) - Create a company
* [getAtsCompany2](#getatscompany2) - Retrieve a company
* [getCrmCompany2](#getcrmcompany2) - Retrieve a company
* [getHrisCompany2](#gethriscompany2) - Retrieve a company
* [listAtsCompanies2](#listatscompanies2) - List all companies
* [listCrmCompanies2](#listcrmcompanies2) - List all companies
* [listEnrichCompanies2](#listenrichcompanies2) - Retrieve enrichment information for a company
* [listHrisCompanies2](#listhriscompanies2) - List all companies
* [patchAtsCompany2](#patchatscompany2) - Update a company
* [patchCrmCompany2](#patchcrmcompany2) - Update a company
* [patchHrisCompany2](#patchhriscompany2) - Update a company
* [removeAtsCompany2](#removeatscompany2) - Remove a company
* [removeCrmCompany2](#removecrmcompany2) - Remove a company
* [removeHrisCompany2](#removehriscompany2) - Remove a company
* [updateAtsCompany2](#updateatscompany2) - Update a company
* [updateCrmCompany2](#updatecrmcompany2) - Update a company
* [updateHrisCompany2](#updatehriscompany2) - Update a company

## createAtsCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCompany2" method="post" path="/ats/{connection_id}/company" -->
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

$request = new Operations\CreateAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
);

$response = $sdk->company->createAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsCompany2Request](../../Models/Operations/CreateAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsCompany2Response](../../Models/Operations/CreateAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmCompany2" method="post" path="/crm/{connection_id}/company" -->
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

$request = new Operations\CreateCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
);

$response = $sdk->company->createCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCrmCompany2Request](../../Models/Operations/CreateCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCrmCompany2Response](../../Models/Operations/CreateCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createHrisCompany2

Create a company

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisCompany2" method="post" path="/hris/{connection_id}/company" -->
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

$request = new Operations\CreateHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
);

$response = $sdk->company->createHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisCompany2Request](../../Models/Operations/CreateHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisCompany2Response](../../Models/Operations/CreateHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCompany2" method="get" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\GetAtsCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsCompany2Request](../../Models/Operations/GetAtsCompany2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsCompany2Response](../../Models/Operations/GetAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmCompany2" method="get" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\GetCrmCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCrmCompany2Request](../../Models/Operations/GetCrmCompany2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCrmCompany2Response](../../Models/Operations/GetCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisCompany2

Retrieve a company

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisCompany2" method="get" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\GetHrisCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->getHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisCompany2Request](../../Models/Operations/GetHrisCompany2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisCompany2Response](../../Models/Operations/GetHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCompanies2" method="get" path="/ats/{connection_id}/company" -->
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

$request = new Operations\ListAtsCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->company->listAtsCompanies2(
    request: $request
);

if ($response->atsCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCompanies2Request](../../Models/Operations/ListAtsCompanies2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsCompanies2Response](../../Models/Operations/ListAtsCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmCompanies2" method="get" path="/crm/{connection_id}/company" -->
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

$request = new Operations\ListCrmCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->company->listCrmCompanies2(
    request: $request
);

if ($response->crmCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmCompanies2Request](../../Models/Operations/ListCrmCompanies2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmCompanies2Response](../../Models/Operations/ListCrmCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listEnrichCompanies2

Retrieve enrichment information for a company

### Example Usage

<!-- UsageSnippet language="php" operationID="listEnrichCompanies2" method="get" path="/enrich/{connection_id}/company" -->
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

$request = new Operations\ListEnrichCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->company->listEnrichCompanies2(
    request: $request
);

if ($response->enrichCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListEnrichCompanies2Request](../../Models/Operations/ListEnrichCompanies2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListEnrichCompanies2Response](../../Models/Operations/ListEnrichCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisCompanies2

List all companies

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisCompanies2" method="get" path="/hris/{connection_id}/company" -->
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

$request = new Operations\ListHrisCompanies2Request(
    connectionId: '<id>',
);

$response = $sdk->company->listHrisCompanies2(
    request: $request
);

if ($response->hrisCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisCompanies2Request](../../Models/Operations/ListHrisCompanies2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisCompanies2Response](../../Models/Operations/ListHrisCompanies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCompany2" method="patch" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\PatchAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsCompany2Request](../../Models/Operations/PatchAtsCompany2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsCompany2Response](../../Models/Operations/PatchAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmCompany2" method="patch" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\PatchCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCrmCompany2Request](../../Models/Operations/PatchCrmCompany2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCrmCompany2Response](../../Models/Operations/PatchCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisCompany2" method="patch" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\PatchHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->patchHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisCompany2Request](../../Models/Operations/PatchHrisCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisCompany2Response](../../Models/Operations/PatchHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCompany2" method="delete" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveAtsCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeAtsCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsCompany2Request](../../Models/Operations/RemoveAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsCompany2Response](../../Models/Operations/RemoveAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmCompany2" method="delete" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveCrmCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeCrmCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCrmCompany2Request](../../Models/Operations/RemoveCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCrmCompany2Response](../../Models/Operations/RemoveCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisCompany2

Remove a company

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisCompany2" method="delete" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\RemoveHrisCompany2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->removeHrisCompany2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisCompany2Request](../../Models/Operations/RemoveHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisCompany2Response](../../Models/Operations/RemoveHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCompany2" method="put" path="/ats/{connection_id}/company/{id}" -->
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

$request = new Operations\UpdateAtsCompany2Request(
    atsCompany: new Shared\AtsCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateAtsCompany2(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsCompany2Request](../../Models/Operations/UpdateAtsCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsCompany2Response](../../Models/Operations/UpdateAtsCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmCompany2" method="put" path="/crm/{connection_id}/company/{id}" -->
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

$request = new Operations\UpdateCrmCompany2Request(
    crmCompany: new Shared\CrmCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateCrmCompany2(
    request: $request
);

if ($response->crmCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCrmCompany2Request](../../Models/Operations/UpdateCrmCompany2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCrmCompany2Response](../../Models/Operations/UpdateCrmCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisCompany2

Update a company

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisCompany2" method="put" path="/hris/{connection_id}/company/{id}" -->
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

$request = new Operations\UpdateHrisCompany2Request(
    hrisCompany: new Shared\HrisCompany(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->company->updateHrisCompany2(
    request: $request
);

if ($response->hrisCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisCompany2Request](../../Models/Operations/UpdateHrisCompany2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisCompany2Response](../../Models/Operations/UpdateHrisCompany2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |