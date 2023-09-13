<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class PatchAtsConnectionIdInterviewIdResponse
{
    /**
     * Successful
     * 
     * @var ?\Unified\Unified_to\Models\Shared\AtsInterview $atsInterview
     */
	
    public ?\Unified\Unified_to\Models\Shared\AtsInterview $atsInterview = null;
    
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->atsInterview = null;
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
