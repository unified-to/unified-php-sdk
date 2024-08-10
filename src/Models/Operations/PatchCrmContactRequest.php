<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchCrmContactRequest
{
    /**
     * A contact represents a person that optionally is associated with a deal and/or a company
     *
     * @var ?Shared\CrmContact $crmContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\CrmContact $crmContact = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Contact
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     * @param  ?string  $connectionId
     * @param  ?string  $id
     * @param  ?Shared\CrmContact  $crmContact
     */
    public function __construct(?string $connectionId = null, ?string $id = null, ?Shared\CrmContact $crmContact = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->crmContact = $crmContact;
    }
}