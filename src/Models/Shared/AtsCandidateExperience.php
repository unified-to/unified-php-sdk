<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AtsCandidateExperience
{
    /**
     *
     * @var ?string $companyName
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyName = null;

    /**
     *
     * @var ?\DateTime $endAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('end_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $endAt = null;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     * @param  ?string  $companyName
     * @param  ?\DateTime  $endAt
     * @param  ?\DateTime  $startAt
     * @param  ?string  $title
     * @phpstan-pure
     */
    public function __construct(?string $companyName = null, ?\DateTime $endAt = null, ?\DateTime $startAt = null, ?string $title = null)
    {
        $this->companyName = $companyName;
        $this->endAt = $endAt;
        $this->startAt = $startAt;
        $this->title = $title;
    }
}