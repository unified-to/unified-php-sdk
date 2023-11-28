# Candidate


### Available Operations

* [createAtsCandidate](#createatscandidate) - Create a candidate
* [getAtsCandidate](#getatscandidate) - Retrieve a candidate
* [listAtsCandidates](#listatscandidates) - List all candidates
* [patchAtsCandidate](#patchatscandidate) - Update a candidate
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [updateAtsCandidate](#updateatscandidate) - Update a candidate

## createAtsCandidate

Create a candidate

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
    $request = new Operations\CreateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'South Hill';
    $request->atsCandidate->address->country = 'Denmark';
    $request->atsCandidate->address->countryCode = 'KM';
    $request->atsCandidate->address->postalCode = '72991-5163';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'Pollich - Lubowitz';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-05T23:23:31.487Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->linkUrls = [
        'string',
    ];
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new Shared\PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-18T18:21:52.157Z');
    $request->connectionId = 'string';

    $response = $sdk->candidate->createAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**


## getAtsCandidate

Retrieve a candidate

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
    $request = new Operations\GetAtsCandidateRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->candidate->getAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**


## listAtsCandidates

List all candidates

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
    $request = new Operations\ListAtsCandidatesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6384.09;
    $request->offset = 7452.94;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-17T23:18:31.102Z');

    $response = $sdk->candidate->listAtsCandidates($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**


## patchAtsCandidate

Update a candidate

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
    $request = new Operations\PatchAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'Fort Bridget';
    $request->atsCandidate->address->country = 'Sri Lanka';
    $request->atsCandidate->address->countryCode = 'GI';
    $request->atsCandidate->address->postalCode = '46054';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'Donnelly - Bartell';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-06T12:13:20.908Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->linkUrls = [
        'string',
    ];
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new Shared\PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-19T12:47:03.298Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->candidate->patchAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**


## removeAtsCandidate

Remove a candidate

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
    $request = new Operations\RemoveAtsCandidateRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->candidate->removeAtsCandidate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**


## updateAtsCandidate

Update a candidate

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
    $request = new Operations\UpdateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'Hintzborough';
    $request->atsCandidate->address->country = 'Afghanistan';
    $request->atsCandidate->address->countryCode = 'TF';
    $request->atsCandidate->address->postalCode = '39423';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'O\'Reilly Inc';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-30T14:37:21.726Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->linkUrls = [
        'string',
    ];
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new Shared\PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-18T01:19:42.316Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->candidate->updateAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**

