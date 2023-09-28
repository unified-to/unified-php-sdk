# Candidate
(*candidate*)

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'multimedia';
    $request->id = '<ID>';

    $response = $sdk->candidate->deleteAtsConnectionIdCandidateId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdCandidateIdRequest](../../models/operations/DeleteAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateRequest();
    $request->connectionId = 'Northwest forceful Moore';
    $request->limit = 2623.89;
    $request->offset = 7811.91;
    $request->order = 'Mouse whether deploy';
    $request->query = 'pink';
    $request->sort = 'huzzah thistle';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-13T15:14:03.645Z');

    $response = $sdk->candidate->getAtsConnectionIdCandidate($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateRequest](../../models/operations/GetAtsConnectionIdCandidateRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdCandidateIdRequest();
    $request->connectionId = 'ha Loan';
    $request->id = '<ID>';

    $response = $sdk->candidate->getAtsConnectionIdCandidateId($request);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdCandidateIdRequest](../../models/operations/GetAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'closely Goyette plus';
    $request->atsCandidate->address->address2 = 'culpa';
    $request->atsCandidate->address->city = 'Darrinshire';
    $request->atsCandidate->address->country = 'Mongolia';
    $request->atsCandidate->address->countryCode = 'GW';
    $request->atsCandidate->address->postalCode = '05275';
    $request->atsCandidate->address->region = 'TLS calculating';
    $request->atsCandidate->address->regionCode = 'up Argon Internal';
    $request->atsCandidate->companyName = 'Fadel, Schulist and Koss';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-09T07:16:54.728Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Home';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Cadillac Elegant';
    $request->atsCandidate->name = 'Tricycle Yttrium Hybrid';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'Blues',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'whether Cadillac';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-01T02:58:46.894Z');
    $request->connectionId = 'Hudson East';
    $request->id = '<ID>';

    $response = $sdk->candidate->patchAtsConnectionIdCandidateId($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdCandidateIdRequest](../../models/operations/PatchAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'incubate';
    $request->atsCandidate->address->address2 = 'azure Trans';
    $request->atsCandidate->address->city = 'Port Rory';
    $request->atsCandidate->address->country = 'El Salvador';
    $request->atsCandidate->address->countryCode = 'CX';
    $request->atsCandidate->address->postalCode = '54222-0235';
    $request->atsCandidate->address->region = 'modi fooey';
    $request->atsCandidate->address->regionCode = 'Metal TCP incidunt';
    $request->atsCandidate->companyName = 'McCullough, Rosenbaum and Daugherty';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-07T05:55:59.357Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'likewise withdrawal auxiliary';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'though North';
    $request->atsCandidate->name = 'East Jewelery';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'hm',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Sausages';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-09T12:40:16.637Z');
    $request->connectionId = 'Rubber Gender';

    $response = $sdk->candidate->postAtsConnectionIdCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdCandidateRequest](../../models/operations/PostAtsConnectionIdCandidateRequest.md) | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdCandidateIdRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'archive';
    $request->atsCandidate->address->address2 = 'Specialist Kyat';
    $request->atsCandidate->address->city = 'New Dennis';
    $request->atsCandidate->address->country = 'Mauritius';
    $request->atsCandidate->address->countryCode = 'TL';
    $request->atsCandidate->address->postalCode = '49105-9909';
    $request->atsCandidate->address->region = 'copy olive';
    $request->atsCandidate->address->regionCode = 'withdrawal cumque person';
    $request->atsCandidate->companyName = 'Kuhn and Sons';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-28T10:51:00.922Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Kenyan';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Investment';
    $request->atsCandidate->name = 'Concrete homogeneous';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'Reggae',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Southwest Savings program';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-27T12:33:33.410Z');
    $request->connectionId = 'collaborative';
    $request->id = '<ID>';

    $response = $sdk->candidate->putAtsConnectionIdCandidateId($request);

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
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdRequest](../../models/operations/PutAtsConnectionIdCandidateIdRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdCandidateIdResponse](../../models/operations/PutAtsConnectionIdCandidateIdResponse.md)**

