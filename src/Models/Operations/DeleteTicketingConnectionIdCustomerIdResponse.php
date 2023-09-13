<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class DeleteTicketingConnectionIdCustomerIdResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Successful
     * 
     * @var ?string $deleteTicketingConnectionIdCustomerIdDefaultApplicationJSONString
     */
	
    public ?string $deleteTicketingConnectionIdCustomerIdDefaultApplicationJSONString = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->deleteTicketingConnectionIdCustomerIdDefaultApplicationJSONString = null;
	}
}
