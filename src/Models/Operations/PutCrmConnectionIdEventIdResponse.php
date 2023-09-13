<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class PutCrmConnectionIdEventIdResponse
{
	
    public string $contentType;
    
    /**
     * Successful
     * 
     * @var ?\Unified\Unified_to\Models\Shared\CrmEvent $crmEvent
     */
	
    public ?\Unified\Unified_to\Models\Shared\CrmEvent $crmEvent = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->crmEvent = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
