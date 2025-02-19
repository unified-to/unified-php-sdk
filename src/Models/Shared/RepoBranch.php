<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class RepoBranch
{
    /**
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var string $repoId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('repo_id')]
    public string $repoId;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

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
     * @param  string  $name
     * @param  string  $repoId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $id
     * @param  ?array<string, mixed>  $raw
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(string $name, string $repoId, ?\DateTime $createdAt = null, ?string $id = null, ?array $raw = null, ?\DateTime $updatedAt = null)
    {
        $this->name = $name;
        $this->repoId = $repoId;
        $this->createdAt = $createdAt;
        $this->id = $id;
        $this->raw = $raw;
        $this->updatedAt = $updatedAt;
    }
}