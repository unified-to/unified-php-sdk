<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/**
 * CommerceCollection - A collection of items/products/services
 * 
 * @package Unified\Unified_to\Models\Shared
 * @access public
 */
class CommerceCollection
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $id;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_featured')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isFeatured = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_visible')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isVisible = null;
    
    /**
     * $itemIds
     * 
     * @var ?array<string> $itemIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('item_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $itemIds = null;
    
    /**
     * $media
     * 
     * @var ?array<\Unified\Unified_to\Models\Shared\CommerceItemMedia> $media
     */
	#[\JMS\Serializer\Annotation\SerializedName('media')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\CommerceItemMedia>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $media = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $name;
    
	#[\JMS\Serializer\Annotation\SerializedName('public_description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicDescription = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('public_name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $publicName = null;
    
    /**
     * $raw
     * 
     * @var ?array<string, mixed> $raw
     */
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;
    
    /**
     * $tags
     * 
     * @var ?array<string> $tags
     */
	#[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $tags = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->description = null;
		$this->id = "";
		$this->isActive = null;
		$this->isFeatured = null;
		$this->isVisible = null;
		$this->itemIds = null;
		$this->media = null;
		$this->name = "";
		$this->publicDescription = null;
		$this->publicName = null;
		$this->raw = null;
		$this->tags = null;
		$this->updatedAt = null;
	}
}