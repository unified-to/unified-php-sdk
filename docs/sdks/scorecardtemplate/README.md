# Scorecardtemplate

## Overview

### Available Operations

* [getUcScorecardtemplate](#getucscorecardtemplate) - Retrieve a scorecardtemplate
* [listUcScorecardtemplates](#listucscorecardtemplates) - List all scorecardtemplates

## getUcScorecardtemplate

Retrieve a scorecardtemplate

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcScorecardtemplate" method="get" path="/uc/{connection_id}/scorecardtemplate/{id}" -->
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

$request = new Operations\GetUcScorecardtemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->scorecardtemplate->getUcScorecardtemplate(
    request: $request
);

if ($response->ucScorecardtemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetUcScorecardtemplateRequest](../../Models/Operations/GetUcScorecardtemplateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetUcScorecardtemplateResponse](../../Models/Operations/GetUcScorecardtemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcScorecardtemplates

List all scorecardtemplates

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcScorecardtemplates" method="get" path="/uc/{connection_id}/scorecardtemplate" -->
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

$request = new Operations\ListUcScorecardtemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->scorecardtemplate->listUcScorecardtemplates(
    request: $request
);

if ($response->ucScorecardtemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListUcScorecardtemplatesRequest](../../Models/Operations/ListUcScorecardtemplatesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListUcScorecardtemplatesResponse](../../Models/Operations/ListUcScorecardtemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |