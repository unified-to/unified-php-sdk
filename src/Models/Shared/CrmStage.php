<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CrmStage
{
    /**
     *
     * @var ?bool $active
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('active')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $active = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?float $dealProbability
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('deal_probability')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $dealProbability = null;

    /**
     *
     * @var ?float $displayOrder
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('display_order')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $displayOrder = null;

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
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?bool  $active
     * @param  ?\DateTime  $createdAt
     * @param  ?float  $dealProbability
     * @param  ?float  $displayOrder
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?bool $active = null, ?\DateTime $createdAt = null, ?float $dealProbability = null, ?float $displayOrder = null, ?string $id = null, ?string $name = null, ?\DateTime $updatedAt = null)
    {
        $this->active = $active;
        $this->createdAt = $createdAt;
        $this->dealProbability = $dealProbability;
        $this->displayOrder = $displayOrder;
        $this->id = $id;
        $this->name = $name;
        $this->updatedAt = $updatedAt;
    }
}