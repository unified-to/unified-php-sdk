<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class KmsPage
{
    /**
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var KmsPageType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\KmsPageType')]
    public KmsPageType $type;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $downloadUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('download_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $downloadUrl = null;

    /**
     *
     * @var ?bool $hasChildren
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('has_children')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $hasChildren = null;

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
     * $metadata
     *
     * @var ?array<KmsPageMetadata> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\KmsPageMetadata>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $parentPageId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('parent_page_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $parentPageId = null;

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
     * @var ?string $spaceId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('space_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $spaceId = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('user_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     *
     * @var ?string $webUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('web_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $webUrl = null;

    /**
     * @param  string  $title
     * @param  KmsPageType  $type
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $downloadUrl
     * @param  ?bool  $hasChildren
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?array<KmsPageMetadata>  $metadata
     * @param  ?string  $parentPageId
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $spaceId
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     * @param  ?string  $webUrl
     * @phpstan-pure
     */
    public function __construct(string $title, KmsPageType $type, ?\DateTime $createdAt = null, ?string $downloadUrl = null, ?bool $hasChildren = null, ?string $id = null, ?bool $isActive = null, ?array $metadata = null, ?string $parentPageId = null, ?array $raw = null, ?string $spaceId = null, ?\DateTime $updatedAt = null, ?string $userId = null, ?string $webUrl = null)
    {
        $this->title = $title;
        $this->type = $type;
        $this->createdAt = $createdAt;
        $this->downloadUrl = $downloadUrl;
        $this->hasChildren = $hasChildren;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->metadata = $metadata;
        $this->parentPageId = $parentPageId;
        $this->raw = $raw;
        $this->spaceId = $spaceId;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
        $this->webUrl = $webUrl;
    }
}