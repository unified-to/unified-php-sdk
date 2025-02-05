<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class TaskProject
{
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
     * $groupIds
     *
     * @var ?array<string> $groupIds
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('group_ids')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $groupIds = null;

    /**
     *
     * @var ?bool $hasTasks
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_tasks')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasTasks = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

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
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?array<string>  $groupIds
     * @param  ?bool  $hasTasks
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?string  $parentId
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<string>  $userIds
     * @phpstan-pure
     */
    public function __construct(?\DateTime $createdAt = null, ?string $description = null, ?array $groupIds = null, ?bool $hasTasks = null, ?string $id = null, ?string $name = null, ?string $parentId = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?array $userIds = null)
    {
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->groupIds = $groupIds;
        $this->hasTasks = $hasTasks;
        $this->id = $id;
        $this->name = $name;
        $this->parentId = $parentId;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->userIds = $userIds;
    }
}