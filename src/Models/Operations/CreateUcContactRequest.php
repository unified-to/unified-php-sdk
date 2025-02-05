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
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * A contact represents a person that optionally is associated with a call
     *
     * @var ?Shared\UcContact $ucContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\UcContact $ucContact = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  ?Shared\UcContact  $ucContact
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(string $connectionId, ?Shared\UcContact $ucContact = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->ucContact = $ucContact;
        $this->fields = $fields;
    }
}