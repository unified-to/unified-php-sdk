<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisGroup
{
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $description = null;
    
    /**
     * $employeeIds
     * 
     * @var ?array<string> $employeeIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('employee_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $employeeIds = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;
    
    /**
     * $managerIds
     * 
     * @var ?array<string> $managerIds
     */
	#[\JMS\Serializer\Annotation\SerializedName('manager_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $managerIds = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('parent_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $parentId = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('Unified\Unified_to\Models\Shared\PropertyHrisGroupRaw')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyHrisGroupRaw $raw = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\HrisGroupType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisGroupType $type = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;
    
	public function __construct()
	{
		$this->createdAt = null;
		$this->description = null;
		$this->employeeIds = null;
		$this->id = null;
		$this->isActive = null;
		$this->managerIds = null;
		$this->name = null;
		$this->parentId = null;
		$this->raw = null;
		$this->type = null;
		$this->updatedAt = null;
	}
}
