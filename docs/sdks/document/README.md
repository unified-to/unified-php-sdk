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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-25T01:00:46.478Z');
    $request->atsDocument->documentData = 'string';
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'mouse_per_missouri.mp4';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = [
        'empowering' => 'string',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::CoverLetter;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-08T09:03:14.368Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAtsDocumentRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAtsDocumentsRequest();
    $request->applicationId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 9635.37;
    $request->offset = 8402.77;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T11:33:08.084Z');
    $request->atsDocument->documentData = 'string';
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'future_underpin.mp4v';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = [
        'ipsam' => 'string',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::Other;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-04T16:17:46.270Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAtsDocumentRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T17:05:49.106Z');
    $request->atsDocument->documentData = 'string';
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'unbranded_reprehenderit.jpg';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = [
        'GB' => 'string',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::OfferPacket;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-21T13:20:57.007Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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

