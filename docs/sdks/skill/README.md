# Skill

## Overview

### Available Operations

* [getGenaiSkill](#getgenaiskill) - Retrieve a skill
* [listGenaiSkills](#listgenaiskills) - List all skills
* [removeGenaiSkill](#removegenaiskill) - Remove a skill

## getGenaiSkill

Retrieve a skill

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiSkill" method="get" path="/genai/{connection_id}/skill/{id}" -->
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

$request = new Operations\GetGenaiSkillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->skill->getGenaiSkill(
    request: $request
);

if ($response->genaiSkill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetGenaiSkillRequest](../../Models/Operations/GetGenaiSkillRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetGenaiSkillResponse](../../Models/Operations/GetGenaiSkillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiSkills

List all skills

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiSkills" method="get" path="/genai/{connection_id}/skill" -->
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

$request = new Operations\ListGenaiSkillsRequest(
    connectionId: '<id>',
);

$response = $sdk->skill->listGenaiSkills(
    request: $request
);

if ($response->genaiSkills !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListGenaiSkillsRequest](../../Models/Operations/ListGenaiSkillsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListGenaiSkillsResponse](../../Models/Operations/ListGenaiSkillsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiSkill

Remove a skill

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiSkill" method="delete" path="/genai/{connection_id}/skill/{id}" -->
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

$request = new Operations\RemoveGenaiSkillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->skill->removeGenaiSkill(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveGenaiSkillRequest](../../Models/Operations/RemoveGenaiSkillRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveGenaiSkillResponse](../../Models/Operations/RemoveGenaiSkillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |