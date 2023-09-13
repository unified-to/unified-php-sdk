<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class GetCrmConnectionIdCompanyIdResponse
{
	
    public string $contentType;
    
    /**
     * Successful
     * 
     * @var ?\Unified\Unified_to\Models\Shared\CrmCompany $crmCompany
     */
	
    public ?\Unified\Unified_to\Models\Shared\CrmCompany $crmCompany = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->crmCompany = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
