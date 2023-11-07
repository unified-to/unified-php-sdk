<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchPassthroughRequest
{
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=path')]
    public string $path;
    
    /**
     * integration-specific payload
     * 
     * @var ?\Unified\Unified_to\Models\Shared\Undefined $undefined
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\Undefined $undefined = null;
    
	public function __construct()
	{
		$this->connectionId = "";
		$this->path = "";
		$this->undefined = null;
	}
}