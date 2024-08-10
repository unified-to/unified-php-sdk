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
     * @var ?string $companyDomain
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_domain')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyDomain = null;

    /**
     *
     * @var ?string $companyId
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyId = null;

    /**
     *
     * @var ?string $companyName
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;

    /**
     *
     * @var ?\DateTime $endAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('end_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $endAt = null;

    /**
     *
     * @var ?string $location
     */
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $location = null;

    /**
     *
     * @var ?\DateTime $startAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('start_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $startAt = null;

    /**
     *
     * @var string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    public string $title;

    /**
     * @param  ?string  $title
     * @param  ?string  $companyDomain
     * @param  ?string  $companyId
     * @param  ?string  $companyName
     * @param  ?\DateTime  $endAt
     * @param  ?string  $location
     * @param  ?\DateTime  $startAt
     */
    public function __construct(?string $title = null, ?string $companyDomain = null, ?string $companyId = null, ?string $companyName = null, ?\DateTime $endAt = null, ?string $location = null, ?\DateTime $startAt = null)
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