<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class GetTicketingConnectionIdNotesTicketIdIdRequest
{
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * ID of the Note
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
    /**
     * ID of the ticket
     * 
     * @var string $ticketId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=ticket_id')]
    public string $ticketId;
    
	public function __construct()
	{
		$this->connectionId = "";
		$this->id = "";
		$this->ticketId = "";
	}
}
