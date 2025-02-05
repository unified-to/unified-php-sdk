<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class MessagingChannel
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

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
     * @var ?bool $hasSubchannels
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_subchannels')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasSubchannels = null;

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
     *
     * @var ?bool $isPrivate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_private')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPrivate = null;

    /**
     * $members
     *
     * @var ?array<MessagingMember> $members
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('members')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $members = null;

    /**
     *
     * @var ?string $parentChannelId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_channel_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentChannelId = null;

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
     *
     * @var ?string $webUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('web_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webUrl = null;

    /**
     * @param  string  $name
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?bool  $hasSubchannels
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?bool  $isPrivate
     * @param  ?array<MessagingMember>  $members
     * @param  ?string  $parentChannelId
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $webUrl
     * @phpstan-pure
     */
    public function __construct(string $name, ?\DateTime $createdAt = null, ?string $description = null, ?bool $hasSubchannels = null, ?string $id = null, ?bool $isActive = null, ?bool $isPrivate = null, ?array $members = null, ?string $parentChannelId = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?string $webUrl = null)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->hasSubchannels = $hasSubchannels;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->isPrivate = $isPrivate;
        $this->members = $members;
        $this->parentChannelId = $parentChannelId;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->webUrl = $webUrl;
    }
}