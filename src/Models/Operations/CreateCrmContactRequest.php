<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateCrmContactRequest
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
     * @param  ?string  $connectionId
     * @param  ?Shared\CrmContact  $crmContact
     */
    public function __construct(?string $connectionId = null, ?Shared\CrmContact $crmContact = null)
    {
        $this->connectionId = $connectionId;
        $this->crmContact = $crmContact;
    }
}