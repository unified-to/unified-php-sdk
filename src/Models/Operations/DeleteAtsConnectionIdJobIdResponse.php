<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class DeleteAtsConnectionIdJobIdResponse
{
	
    public string $contentType;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
    /**
     * Successful
     * 
     * @var ?string $deleteAtsConnectionIdJobIdDefaultApplicationJSONString
     */
	
    public ?string $deleteAtsConnectionIdJobIdDefaultApplicationJSONString = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->statusCode = 0;
		$this->rawResponse = null;
		$this->deleteAtsConnectionIdJobIdDefaultApplicationJSONString = null;
	}
}
