# Candidate
(*candidate*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'tan';
    $request->atsCandidate->address->address2 = 'Recycled';
    $request->atsCandidate->address->city = 'Rosenbaumburgh';
    $request->atsCandidate->address->country = 'Trinidad and Tobago';
    $request->atsCandidate->address->countryCode = 'TR';
    $request->atsCandidate->address->postalCode = '51636';
    $request->atsCandidate->address->region = 'Designer';
    $request->atsCandidate->address->regionCode = 'Netherlands';
    $request->atsCandidate->companyName = 'O\'Reilly, Rosenbaum and Brown';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-27T08:09:47.536Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Bedfordshire';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Southeast';
    $request->atsCandidate->name = 'Oregon';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'Response',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Music';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-06T05:25:05.539Z');
    $request->connectionId = 'Bigender';

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest](../../models/operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsCandidateResponse](../../models/operations/CreateAtsCandidateResponse.md)**


## getAtsCandidate

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsCandidateRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsCandidateRequest();
    $request->connectionId = 'Generic';
    $request->fields = [
        'hub',
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
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsCandidateRequest](../../models/operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCandidateResponse](../../models/operations/GetAtsCandidateResponse.md)**


## listAtsCandidates

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsCandidatesRequest();
    $request->connectionId = 'Mobility';
    $request->fields = [
        'Cambridgeshire',
    ];
    $request->limit = 1095.92;
    $request->offset = 8552.83;
    $request->order = 'Investor';
    $request->query = 'colorful';
    $request->sort = 'Chair';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-19T23:43:16.812Z');

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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest](../../models/operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCandidatesResponse](../../models/operations/ListAtsCandidatesResponse.md)**


## patchAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'Sausages';
    $request->atsCandidate->address->address2 = 'Tennessee';
    $request->atsCandidate->address->city = 'East Guy';
    $request->atsCandidate->address->country = 'New Zealand';
    $request->atsCandidate->address->countryCode = 'BJ';
    $request->atsCandidate->address->postalCode = '46106-5380';
    $request->atsCandidate->address->region = 'Identity';
    $request->atsCandidate->address->regionCode = 'where';
    $request->atsCandidate->companyName = 'Bechtelar Inc';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-29T00:24:10.210Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Van';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'Benz';
    $request->atsCandidate->name = 'PCI';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'to',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Rustic';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-28T18:26:32.684Z');
    $request->connectionId = 'District';
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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest](../../models/operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsCandidateResponse](../../models/operations/PatchAtsCandidateResponse.md)**


## removeAtsCandidate

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsCandidateRequest();
    $request->connectionId = 'male';
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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest](../../models/operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsCandidateResponse](../../models/operations/RemoveAtsCandidateResponse.md)**


## updateAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'pascal';
    $request->atsCandidate->address->address2 = 'synergies';
    $request->atsCandidate->address->city = 'Erie';
    $request->atsCandidate->address->country = 'French Southern Territories';
    $request->atsCandidate->address->countryCode = 'TV';
    $request->atsCandidate->address->postalCode = '23361';
    $request->atsCandidate->address->region = 'calculate';
    $request->atsCandidate->address->regionCode = 'lime';
    $request->atsCandidate->companyName = 'Hodkiewicz Group';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-15T06:13:11.491Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'Metal';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'eventually';
    $request->atsCandidate->name = 'transition';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'SUV',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'Frozen';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T14:35:14.640Z');
    $request->connectionId = 'puny';
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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest](../../models/operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsCandidateResponse](../../models/operations/UpdateAtsCandidateResponse.md)**

