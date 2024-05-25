# Document


### Available Operations

* [createAtsDocument](#createatsdocument) - Create a document
* [getAtsDocument](#getatsdocument) - Retrieve a document
* [listAtsDocuments](#listatsdocuments) - List all documents
* [patchAtsDocument](#patchatsdocument) - Update a document
* [removeAtsDocument](#removeatsdocument) - Remove a document
* [updateAtsDocument](#updateatsdocument) - Update a document

## createAtsDocument

Create a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-25T01:00:46.478Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'your_file_here';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'female' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::CoverLetter;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-21T14:39:08.865Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->document->createAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest](../../Models/Operations/CreateAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse](../../Models/Operations/CreateAtsDocumentResponse.md)**


## getAtsDocument

Retrieve a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAtsDocumentRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->document->getAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsDocumentRequest](../../Models/Operations/GetAtsDocumentRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsDocumentResponse](../../Models/Operations/GetAtsDocumentResponse.md)**


## listAtsDocuments

List all documents

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAtsDocumentsRequest();
    $request->applicationId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9635.37;
    $request->offset = 8402.77;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-31T00:55:54.895Z');;

    $response = $sdk->document->listAtsDocuments($request);

    if ($response->atsDocuments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest](../../Models/Operations/ListAtsDocumentsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse](../../Models/Operations/ListAtsDocumentsResponse.md)**


## patchAtsDocument

Update a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T11:33:08.084Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'your_file_here';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'Other' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::CoverLetter;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-19T12:06:56.902Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->document->patchAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest](../../Models/Operations/PatchAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse](../../Models/Operations/PatchAtsDocumentResponse.md)**


## removeAtsDocument

Remove a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAtsDocumentRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->document->removeAtsDocument($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest](../../Models/Operations/RemoveAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse](../../Models/Operations/RemoveAtsDocumentResponse.md)**


## updateAtsDocument

Update a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T17:05:49.106Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'your_file_here';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'DRAM' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::Other;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-09T02:38:30.011Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->document->updateAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest](../../Models/Operations/UpdateAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse](../../Models/Operations/UpdateAtsDocumentResponse.md)**

