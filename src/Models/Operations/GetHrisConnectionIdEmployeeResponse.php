<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;


class GetHrisConnectionIdEmployeeResponse
{
	
    public string $contentType;
    
    /**
     * Successful
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\HrisEmployee> $hrisEmployees
     */
	
    public ?array $hrisEmployees = null;
    
	
    public int $statusCode;
    
	
    public ?\Psr\Http\Message\ResponseInterface $rawResponse = null;
    
	public function __construct()
	{
		$this->contentType = "";
		$this->hrisEmployees = null;
		$this->statusCode = 0;
		$this->rawResponse = null;
	}
}
