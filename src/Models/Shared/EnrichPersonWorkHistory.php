<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class EnrichPersonWorkHistory
{
    /**
     *
     * @var string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     *
     * @var ?string $companyDomain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_domain')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyDomain = null;

    /**
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

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
     * @var ?string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $location = null;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('start_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $startAt = null;

    /**
     * @param  string  $title
     * @param  ?string  $companyDomain
     * @param  ?string  $companyId
     * @param  ?string  $companyName
     * @param  ?\DateTime  $endAt
     * @param  ?string  $location
     * @param  ?\DateTime  $startAt
     * @phpstan-pure
     */
    public function __construct(string $title, ?string $companyDomain = null, ?string $companyId = null, ?string $companyName = null, ?\DateTime $endAt = null, ?string $location = null, ?\DateTime $startAt = null)
    {
        $this->title = $title;
        $this->companyDomain = $companyDomain;
        $this->companyId = $companyId;
        $this->companyName = $companyName;
        $this->endAt = $endAt;
        $this->location = $location;
        $this->startAt = $startAt;
    }
}