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
     * @var Shared\CrmContact $crmContact
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\CrmContact $crmContact;

    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  Shared\CrmContact  $crmContact
     * @param  string  $connectionId
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(Shared\CrmContact $crmContact, string $connectionId, ?array $fields = null)
    {
        $this->crmContact = $crmContact;
        $this->connectionId = $connectionId;
        $this->fields = $fields;
    }
}