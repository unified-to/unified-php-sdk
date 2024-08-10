<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchTicketingTicketRequest
{
    /**
     *
     * @var ?Shared\TicketingTicket $ticketingTicket
     */
    #[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?Shared\TicketingTicket $ticketingTicket = null;

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
     * @param  ?string  $connectionId
     * @param  ?string  $id
     * @param  ?Shared\TicketingTicket  $ticketingTicket
     */
    public function __construct(?string $connectionId = null, ?string $id = null, ?Shared\TicketingTicket $ticketingTicket = null)
    {
        $this->connectionId = $connectionId;
        $this->id = $id;
        $this->ticketingTicket = $ticketingTicket;
    }
}