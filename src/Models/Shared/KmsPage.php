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
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var string $downloadUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('download_url')]
    public string $downloadUrl;

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
     * @var ?string $parentPageId
     */
    #[\JMS\Serializer\Annotation\SerializedName('parent_page_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $parentPageId = null;

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
     * @var string $spaceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('space_id')]
    public string $spaceId;

    /**
     *
     * @var string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var KmsPageType $type
     */
    #[\JMS\Serializer\Annotation\SerializedName('type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\KmsPageType')]
    public KmsPageType $type;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $userId
     */
    #[\JMS\Serializer\Annotation\SerializedName('user_id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $userId = null;

    /**
     * @param  string  $downloadUrl
     * @param  string  $spaceId
     * @param  string  $title
     * @param  KmsPageType  $type
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?bool  $isActive
     * @param  ?string  $parentPageId
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $userId
     */
    public function __construct(string $downloadUrl, string $spaceId, string $title, KmsPageType $type, ?\DateTime $createdAt = null, ?string $id = null, ?bool $isActive = null, ?string $parentPageId = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?string $userId = null)
    {
        $this->downloadUrl = $downloadUrl;
        $this->spaceId = $spaceId;
        $this->title = $title;
        $this->type = $type;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->isActive = $isActive;
        $this->parentPageId = $parentPageId;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->userId = $userId;
    }
}