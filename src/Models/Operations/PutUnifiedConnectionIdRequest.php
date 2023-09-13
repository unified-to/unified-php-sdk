<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PutUnifiedConnectionIdRequest
{
    /**
     * A connection represents a specific authentication of an integration.
     * 
     * @var ?\Unified\Unified_to\Models\Shared\Connection $connection
     */
	#[SpeakeasyMetadata('request:mediaType=application/json')]
    public ?\Unified\Unified_to\Models\Shared\Connection $connection = null;
    
    /**
     * ID of the Connection
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->connection = null;
		$this->id = "";
	}
}
