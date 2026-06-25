# Template

## Overview

### Available Operations

* [getSigningTemplate2](#getsigningtemplate2) - Retrieve a template
* [listSigningTemplates2](#listsigningtemplates2) - List all templates

## getSigningTemplate2

Retrieve a template

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningTemplate2" method="get" path="/signing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetSigningTemplate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->getSigningTemplate2(
    request: $request
);

if ($response->signingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetSigningTemplate2Request](../../Models/Operations/GetSigningTemplate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetSigningTemplate2Response](../../Models/Operations/GetSigningTemplate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningTemplates2

List all templates

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningTemplates2" method="get" path="/signing/{connection_id}/template" -->
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

$request = new Operations\ListSigningTemplates2Request(
    connectionId: '<id>',
);

$response = $sdk->template->listSigningTemplates2(
    request: $request
);

if ($response->signingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListSigningTemplates2Request](../../Models/Operations/ListSigningTemplates2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListSigningTemplates2Response](../../Models/Operations/ListSigningTemplates2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |