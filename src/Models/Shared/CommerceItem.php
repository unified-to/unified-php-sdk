<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CommerceItem
{
    /**
     *
     * @var ?string $accountId
     */
    #[\JMS\Serializer\Annotation\SerializedName('account_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     * $collectionIds
     *
     * @var ?array<string> $collectionIds
     */
    #[\JMS\Serializer\Annotation\SerializedName('collection_ids')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $collectionIds = null;

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
     * @var ?bool $isTaxable
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_taxable')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?bool $isTaxable = null;

    /**
     * $media
     *
     * @var ?array<CommerceItemMedia> $media
     */
    #[\JMS\Serializer\Annotation\SerializedName('media')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceItemMedia>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $media = null;

    /**
     * $metadata
     *
     * @var ?array<CommerceMetadata> $metadata
     */
    #[\JMS\Serializer\Annotation\SerializedName('metadata')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceMetadata>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $publicDescription
     */
    #[\JMS\Serializer\Annotation\SerializedName('public_description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publicDescription = null;

    /**
     *
     * @var ?string $publicName
     */
    #[\JMS\Serializer\Annotation\SerializedName('public_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $publicName = null;

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
     * @var ?string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $slug = null;

    /**
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\JMS\Serializer\Annotation\SerializedName('tags')]
    #[\JMS\Serializer\Annotation\Type('array<string>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     *
     * @var ?string $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * first variant is the default variant
     *
     * @var ?array<CommerceItemVariant> $variants
     */
    #[\JMS\Serializer\Annotation\SerializedName('variants')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceItemVariant>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $variants = null;

    /**
     *
     * @var ?string $vendorName
     */
    #[\JMS\Serializer\Annotation\SerializedName('vendor_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $vendorName = null;

    /**
     * @param  ?string  $accountId
     * @param  ?array<string>  $collectionIds
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?bool  $isTaxable
     * @param  ?array<CommerceItemMedia>  $media
     * @param  ?array<CommerceMetadata>  $metadata
     * @param  ?string  $name
     * @param  ?string  $publicDescription
     * @param  ?string  $publicName
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $slug
     * @param  ?array<string>  $tags
     * @param  ?string  $type
     * @param  ?\DateTime  $updatedAt
     * @param  ?array<CommerceItemVariant>  $variants
     * @param  ?string  $vendorName
     */
    public function __construct(?string $accountId = null, ?array $collectionIds = null, ?\DateTime $createdAt = null, ?string $description = null, ?string $id = null, ?bool $isActive = null, ?bool $isTaxable = null, ?array $media = null, ?array $metadata = null, ?string $name = null, ?string $publicDescription = null, ?string $publicName = null, ?array $raw = null, ?string $slug = null, ?array $tags = null, ?string $type = null, ?\DateTime $updatedAt = null, ?array $variants = null, ?string $vendorName = null)
    {
        $this->accountId = $accountId;
        $this->collectionIds = $collectionIds;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->isTaxable = $isTaxable;
        $this->media = $media;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->publicDescription = $publicDescription;
        $this->publicName = $publicName;
        $this->raw = $raw;
        $this->slug = $slug;
        $this->tags = $tags;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
        $this->variants = $variants;
        $this->vendorName = $vendorName;
    }
}