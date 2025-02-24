<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchUcContactRequest
{
    /**
     * A contact represents a person that optionally is associated with a call
     *
     * @var Shared\UcContact $ucContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\UcContact $ucContact;

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
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  Shared\UcContact  $ucContact
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(Shared\UcContact $ucContact, string $connectionId, string $id, ?array $fields = null)
    {
        $this->ucContact = $ucContact;
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->fields = $fields;
    }
}