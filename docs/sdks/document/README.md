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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-24T22:30:56.289Z');
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'mouse_per_missouri.mp4';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = new Shared\PropertyAtsDocumentRaw();
    $request->atsDocument->type = Shared\AtsDocumentType::OfferPacket;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-28T09:27:32.859Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';

    $response = $sdk->document->createAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest](../../models/operations/CreateAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse](../../models/operations/CreateAtsDocumentResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAtsDocumentRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->document->getAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsDocumentRequest](../../models/operations/GetAtsDocumentRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsDocumentResponse](../../models/operations/GetAtsDocumentResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-30T11:38:20.739Z');

    $response = $sdk->document->listAtsDocuments($request);

    if ($response->atsDocuments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest](../../models/operations/ListAtsDocumentsRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse](../../models/operations/ListAtsDocumentsResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-01T09:34:15.248Z');
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'future_underpin.mp4v';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = new Shared\PropertyAtsDocumentRaw();
    $request->atsDocument->type = Shared\AtsDocumentType::OfferLetter;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-14T01:39:21.030Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->document->patchAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest](../../models/operations/PatchAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse](../../models/operations/PatchAtsDocumentResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveAtsDocumentRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->document->removeAtsDocument($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest](../../models/operations/RemoveAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse](../../models/operations/RemoveAtsDocumentResponse.md)**


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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = 'string';
    $request->atsDocument->candidateId = 'string';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-05T13:01:49.006Z');
    $request->atsDocument->documentUrl = 'string';
    $request->atsDocument->filename = 'unbranded_reprehenderit.jpg';
    $request->atsDocument->id = '<ID>';
    $request->atsDocument->jobId = 'string';
    $request->atsDocument->raw = new Shared\PropertyAtsDocumentRaw();
    $request->atsDocument->type = Shared\AtsDocumentType::OfferPacket;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-02T17:00:21.700Z');
    $request->atsDocument->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->document->updateAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest](../../models/operations/UpdateAtsDocumentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse](../../models/operations/UpdateAtsDocumentResponse.md)**

