<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisGroup
{
    /**
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $description
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isActive = null;

    /**
     * $managerIds
     *
     * @var ?array<string> $managerIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manager_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $managerIds = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     *
     * @var ?HrisGroupRaw $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisGroupRaw|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisGroupRaw $raw = null;

    /**
     *
     * @var ?HrisGroupType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisGroupType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisGroupType $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * $userIds
     *
     * @var ?array<string> $userIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $userIds = null;

    /**
     * @param  ?string  $companyId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?array<string>  $managerIds
     * @param  ?string  $name
     * @param  ?string  $parentId
     * @param  ?HrisGroupRaw  $raw
     * @param  ?HrisGroupType  $type
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<string>  $userIds
     * @phpstan-pure
     */
    public function __construct(?string $companyId = null, ?\DateTime $createdAt = null, ?string $description = null, ?string $id = null, ?bool $isActive = null, ?array $managerIds = null, ?string $name = null, ?string $parentId = null, ?HrisGroupRaw $raw = null, ?HrisGroupType $type = null, ?\DateTime $updatedAt = null, ?array $userIds = null)
    {
        $this->companyId = $companyId;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->managerIds = $managerIds;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->raw = $raw;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->userIds = $userIds;
    }
}