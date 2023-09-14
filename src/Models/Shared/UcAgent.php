<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * UcAgent - Represents an agent
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class UcAgent
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * An array of email addresses for this agent
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\UcEmail> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\UcEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
    /**
     * The raw data returned by the integration for this agent
     * 
     * @var \Unified\Unified_to\Models\Shared\PropertyUcAgentRaw $raw
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyUcAgentRaw')]
    public PropertyUcAgentRaw $raw;
    
    /**
     * $telephones
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\UcTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\UcTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->emails = null;
		$this->id = null;
		$this->name = null;
		$this->raw = new \Unified\Unified_to\Models\Shared\PropertyUcAgentRaw();
		$this->telephones = null;
		$this->updatedAt = null;
	}
}
