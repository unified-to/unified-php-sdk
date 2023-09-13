<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class DeleteTicketingConnectionIdTicketIdResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Successful
     * 
     * @var ?string $deleteTicketingConnectionIdTicketIdDefaultApplicationJSONString
     */
	
    public ?string $deleteTicketingConnectionIdTicketIdDefaultApplicationJSONString = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->deleteTicketingConnectionIdTicketIdDefaultApplicationJSONString = null;
	}
}
