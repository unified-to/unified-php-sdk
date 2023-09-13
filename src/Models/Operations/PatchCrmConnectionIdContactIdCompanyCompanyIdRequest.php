<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Operations;

use \Unified\Unified_to\Utils\SpeakeasyMetadata;
class PatchCrmConnectionIdContactIdCompanyCompanyIdRequest
{
    /**
     * ID of the company
     * 
     * @var string $companyId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=company_id')]
    public string $companyId;
    
    /**
     * ID of the connection
     * 
     * @var string $connectionId
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=connection_id')]
    public string $connectionId;
    
    /**
     * ID of the Contact
     * 
     * @var string $id
     */
	#[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=id')]
    public string $id;
    
	public function __construct()
	{
		$this->companyId = "";
		$this->connectionId = "";
		$this->id = "";
	}
}
