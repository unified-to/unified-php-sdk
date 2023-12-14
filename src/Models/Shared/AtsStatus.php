<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsStatus
{
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('original_status')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $originalStatus = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyAtsStatusRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAtsStatusRaw $raw = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AtsStatusStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AtsStatusStatus $status = null;
    
	public function __construct()
	{
		$this->description = null;
		$this->id = null;
		$this->originalStatus = null;
		$this->raw = null;
		$this->status = null;
	}
}
