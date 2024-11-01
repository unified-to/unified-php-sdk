<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** CommerceCollection - A collection of items/products/services */
class CommerceCollection
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
     * @var ?bool $isFeatured
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_featured')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isFeatured = null;

    /**
     *
     * @var ?bool $isVisible
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_visible')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isVisible = null;

    /**
     * $media
     *
     * @var ?array<CommerceItemMedia> $media
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('media')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceItemMedia>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $media = null;

    /**
     * $metadata
     *
     * @var ?array<CommerceMetadata> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\CommerceMetadata>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $parentId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentId = null;

    /**
     *
     * @var ?string $publicDescription
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_description')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publicDescription = null;

    /**
     *
     * @var ?string $publicName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('public_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $publicName = null;

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
     * $tags
     *
     * @var ?array<string> $tags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $tags = null;

    /**
     *
     * @var ?CommerceCollectionType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\CommerceCollectionType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?CommerceCollectionType $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  string  $name
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $description
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?bool  $isFeatured
     * @param  ?bool  $isVisible
     * @param  ?array<CommerceItemMedia>  $media
     * @param  ?array<CommerceMetadata>  $metadata
     * @param  ?string  $parentId
     * @param  ?string  $publicDescription
     * @param  ?string  $publicName
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<string>  $tags
     * @param  ?CommerceCollectionType  $type
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(string $name, ?\DateTime $createdAt = null, ?string $description = null, ?string $id = null, ?bool $isActive = null, ?bool $isFeatured = null, ?bool $isVisible = null, ?array $media = null, ?array $metadata = null, ?string $parentId = null, ?string $publicDescription = null, ?string $publicName = null, ?array $raw = null, ?array $tags = null, ?CommerceCollectionType $type = null, ?\DateTime $updatedAt = null)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->isFeatured = $isFeatured;
        $this->isVisible = $isVisible;
        $this->media = $media;
        $this->metadata = $metadata;
        $this->parentId = $parentId;
        $this->publicDescription = $publicDescription;
        $this->publicName = $publicName;
        $this->raw = $raw;
        $this->tags = $tags;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
    }
}