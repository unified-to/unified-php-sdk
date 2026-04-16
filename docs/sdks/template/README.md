# Template

## Overview

### Available Operations

* [getSigningTemplate](#getsigningtemplate) - Retrieve a template
* [listSigningTemplates](#listsigningtemplates) - List all templates

## getSigningTemplate

Retrieve a template

### Example Usage

<!-- UsageSnippet language="php" operationID="getSigningTemplate" method="get" path="/signing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetSigningTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->template->getSigningTemplate(
    request: $request
);

if ($response->signingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetSigningTemplateRequest](../../Models/Operations/GetSigningTemplateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetSigningTemplateResponse](../../Models/Operations/GetSigningTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listSigningTemplates

List all templates

### Example Usage

<!-- UsageSnippet language="php" operationID="listSigningTemplates" method="get" path="/signing/{connection_id}/template" -->
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

$request = new Operations\ListSigningTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->template->listSigningTemplates(
    request: $request
);

if ($response->signingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListSigningTemplatesRequest](../../Models/Operations/ListSigningTemplatesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListSigningTemplatesResponse](../../Models/Operations/ListSigningTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |