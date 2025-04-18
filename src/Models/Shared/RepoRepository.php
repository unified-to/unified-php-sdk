<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class RepoRepository
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
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?bool $isPrivate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('is_private')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $isPrivate = null;

    /**
     *
     * @var ?string $orgId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('org_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $orgId = null;

    /**
     *
     * @var ?string $owner
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('owner')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $owner = null;

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
     * @param  ?string  $id
     * @param  ?bool  $isPrivate
     * @param  ?string  $orgId
     * @param  ?string  $owner
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $webUrl
     * @phpstan-pure
     */
    public function __construct(string $name, ?\DateTime $createdAt = null, ?string $description = null, ?string $id = null, ?bool $isPrivate = null, ?string $orgId = null, ?string $owner = null, ?array $raw = null, ?\DateTime $updatedAt = null, ?string $webUrl = null)
    {
        $this->name = $name;
        $this->createdAt = $createdAt;
        $this->description = $description;
        $this->id = $id;
        $this->isPrivate = $isPrivate;
        $this->orgId = $orgId;
        $this->owner = $owner;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
        $this->webUrl = $webUrl;
    }
}