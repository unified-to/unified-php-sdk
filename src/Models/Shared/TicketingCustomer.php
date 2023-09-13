<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TicketingCustomer
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * $emails
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\TicketingEmail> $emails
     */
	#[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\TicketingEmail>')]
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
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw')]
    public PropertyTicketingCustomerRaw $raw;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
    /**
     * $telephones
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\TicketingTelephone> $telephones
     */
	#[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\TicketingTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d', '', '|Y-m-d'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->emails = null;
		$this->id = null;
		$this->name = null;
		$this->raw = new \Unified\Unified_to\Models\Shared\PropertyTicketingCustomerRaw();
		$this->tags = null;
		$this->telephones = null;
		$this->updatedAt = null;
	}
}
