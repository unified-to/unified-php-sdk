<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class UpdateTicketingTicketRequest
{
    /**
     * ID of the connection
     *
     * @var string $connectionId
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;

    /**
     * ID of the Ticket
     *
     * @var string $id
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;

    /**
     *
     * @var ?Shared\TicketingTicket $ticketingTicket
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\TicketingTicket $ticketingTicket = null;

    /**
     * Comma-delimited fields to return
     *
     * @var ?array<string> $fields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=fields')]
    public ?array $fields = null;

    /**
     * @param  string  $connectionId
     * @param  string  $id
     * @param  ?Shared\TicketingTicket  $ticketingTicket
     * @param  ?array<string>  $fields
     */
    public function __construct(string $connectionId, string $id, ?Shared\TicketingTicket $ticketingTicket = null, ?array $fields = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->ticketingTicket = $ticketingTicket;
        $this->fields = $fields;
    }
}