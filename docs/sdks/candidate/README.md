# candidate

### Available Operations

* [deleteAtsConnectionIdCandidateId](#deleteatsconnectionidcandidateid) - Remove a candidate
* [getAtsConnectionIdCandidate](#getatsconnectionidcandidate) - List all candidates
* [getAtsConnectionIdCandidateId](#getatsconnectionidcandidateid) - Retrieve a candidate
* [patchAtsConnectionIdCandidateId](#patchatsconnectionidcandidateid) - Update a candidate
* [postAtsConnectionIdCandidate](#postatsconnectionidcandidate) - Create a candidate
* [putAtsConnectionIdCandidateId](#putatsconnectionidcandidateid) - Update a candidate

## deleteAtsConnectionIdCandidateId

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'illo';
    $request->id = 'faf4b754-4e47-42e8-8285-7a5b40463a7d';

    $requestSecurity = new DeleteAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->deleteAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest](../../models/operations/DeleteAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |
| `security`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdSecurity](../../models/operations/DeleteAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                                    | The security requirements to use for the request.                                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdResponse](../../models/operations/DeleteAtsConnectionIdCandidateIdResponse.md)**


## getAtsConnectionIdCandidate

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateRequest();
    $request->connectionId = 'nostrum';
    $request->limit = 4753.25;
    $request->offset = 3306;
    $request->order = 'reiciendis';
    $request->query = 'ab';
    $request->sort = 'modi';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-12-27');

    $requestSecurity = new GetAtsConnectionIdCandidateSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->getAtsConnectionIdCandidate($request, $requestSecurity);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest](../../models/operations/GetAtsConnectionIdCandidateRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateSecurity](../../models/operations/GetAtsConnectionIdCandidateSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateResponse](../../models/operations/GetAtsConnectionIdCandidateResponse.md)**


## getAtsConnectionIdCandidateId

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'eveniet';
    $request->id = '764ad733-4ec1-4b78-9b36-a08088d100ef';

    $requestSecurity = new GetAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->getAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest](../../models/operations/GetAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdSecurity](../../models/operations/GetAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdResponse](../../models/operations/GetAtsConnectionIdCandidateIdResponse.md)**


## patchAtsConnectionIdCandidateId

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'mollitia';
    $request->atsCandidate->address->address2 = 'nulla';
    $request->atsCandidate->address->city = 'Corwintown';
    $request->atsCandidate->address->country = 'Afghanistan';
    $request->atsCandidate->address->countryCode = 'TV';
    $request->atsCandidate->address->postalCode = '02118-6113';
    $request->atsCandidate->address->region = 'modi';
    $request->atsCandidate->address->regionCode = 'optio';
    $request->atsCandidate->companyName = 'voluptatibus';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2021-09-21');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'libero';
    $request->atsCandidate->id = '8366c723-ffda-49e0-abee-4825c1fc0e11';
    $request->atsCandidate->imageUrl = 'enim';
    $request->atsCandidate->name = 'Ian Auer';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'a',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Miss';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-13');
    $request->connectionId = 'ullam';
    $request->id = '44ec42de-fcce-48f1-9777-73e63562a7b4';

    $requestSecurity = new PatchAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->patchAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest](../../models/operations/PatchAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdSecurity](../../models/operations/PatchAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdResponse](../../models/operations/PatchAtsConnectionIdCandidateIdResponse.md)**


## postAtsConnectionIdCandidate

Create a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'ipsa';
    $request->atsCandidate->address->address2 = 'rem';
    $request->atsCandidate->address->city = 'Arecibo';
    $request->atsCandidate->address->country = 'Gibraltar';
    $request->atsCandidate->address->countryCode = 'TT';
    $request->atsCandidate->address->postalCode = '83598';
    $request->atsCandidate->address->region = 'est';
    $request->atsCandidate->address->regionCode = 'delectus';
    $request->atsCandidate->companyName = 'velit';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2022-10-19');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'similique';
    $request->atsCandidate->id = '1f5fd942-59c0-4b36-b25e-a944f3b756c1';
    $request->atsCandidate->imageUrl = 'beatae';
    $request->atsCandidate->name = 'Charlie Schaefer';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'fuga',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Mrs.';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-10-26');
    $request->connectionId = 'aliquid';

    $requestSecurity = new PostAtsConnectionIdCandidateSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->postAtsConnectionIdCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest](../../models/operations/PostAtsConnectionIdCandidateRequest.md)   | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |
| `security`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateSecurity](../../models/operations/PostAtsConnectionIdCandidateSecurity.md) | :heavy_check_mark:                                                                                                                            | The security requirements to use for the request.                                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateResponse](../../models/operations/PostAtsConnectionIdCandidateResponse.md)**


## putAtsConnectionIdCandidateId

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'magni';
    $request->atsCandidate->address->address2 = 'incidunt';
    $request->atsCandidate->address->city = 'New Dakota';
    $request->atsCandidate->address->country = 'Guam';
    $request->atsCandidate->address->countryCode = 'PH';
    $request->atsCandidate->address->postalCode = '70361-2623';
    $request->atsCandidate->address->region = 'quod';
    $request->atsCandidate->address->regionCode = 'itaque';
    $request->atsCandidate->companyName = 'a';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d', '2022-01-19');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'doloribus';
    $request->atsCandidate->id = 'de10a0ce-2169-4e51-8019-c6dc5e347627';
    $request->atsCandidate->imageUrl = 'natus';
    $request->atsCandidate->name = 'Felipe Wyman';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'itaque',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Mrs.';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-06-22');
    $request->connectionId = 'perspiciatis';
    $request->id = 'fb2bb4ec-ae6c-43d5-9b3a-debd5daea4c5';

    $requestSecurity = new PutAtsConnectionIdCandidateIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->candidate->putAtsConnectionIdCandidateId($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest](../../models/operations/PutAtsConnectionIdCandidateIdRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdSecurity](../../models/operations/PutAtsConnectionIdCandidateIdSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdResponse](../../models/operations/PutAtsConnectionIdCandidateIdResponse.md)**

