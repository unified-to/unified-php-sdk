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
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?bool $hasSubchannels
     */
    #[\JMS\Serializer\Annotation\SerializedName('has_subchannels')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasSubchannels = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isActive = null;

    /**
     *
     * @var ?bool $isPrivate
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_private')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPrivate = null;

    /**
     * $members
     *
     * @var ?array<MessagingMember> $members
     */
    #[\JMS\Serializer\Annotation\SerializedName('members')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\MessagingMember>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $members = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $parentChannelId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_channel_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $parentChannelId = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $updatedAt = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('web_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
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
     * @param  ?string  $updatedAt
     * @param  ?string  $webUrl
     */
    public function __construct(string $name, ?\DateTime $createdAt = null, ?string $description = null, ?bool $hasSubchannels = null, ?string $id = null, ?bool $isActive = null, ?bool $isPrivate = null, ?array $members = null, ?string $parentChannelId = null, ?array $raw = null, ?string $updatedAt = null, ?string $webUrl = null)
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