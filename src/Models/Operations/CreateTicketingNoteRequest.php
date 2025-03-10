<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class CreateTicketingNoteRequest
{
    /**
     *
     * @var Shared\TicketingNote $ticketingNote
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public Shared\TicketingNote $ticketingNote;

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
     * @param  Shared\TicketingNote  $ticketingNote
     * @param  string  $connectionId
     * @param  ?array<string>  $fields
     * @phpstan-pure
     */
    public function __construct(Shared\TicketingNote $ticketingNote, string $connectionId, ?array $fields = null)
    {
        $this->ticketingNote = $ticketingNote;
        $this->connectionId = $connectionId;
        $this->fields = $fields;
    }
}