<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateUcContactRequest
{
    /**
     * A contact represents a person that optionally is associated with a call
     *
     * @var ?Shared\UcContact $ucContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\UcContact $ucContact = null;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * @param  ?string  $connectionId
     * @param  ?Shared\UcContact  $ucContact
     */
    public function __construct(?string $connectionId = null, ?Shared\UcContact $ucContact = null)
    {
        $this->connectionId = $connectionId;
        $this->ucContact = $ucContact;
    }
}