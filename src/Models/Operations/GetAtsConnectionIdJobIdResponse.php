<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class GetAtsConnectionIdJobIdResponse
{
    /**
     * Successful
     * 
     * @var ?\Unified\Unified_to\Models\Shared\AtsJob $atsJob
     */
	
    public ?\Unified\Unified_to\Models\Shared\AtsJob $atsJob = null;
    
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->atsJob = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
