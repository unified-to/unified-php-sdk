<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** EnrichCompany - A company object from an enrichment integration */
class EnrichCompany
{
    /**
     * The address of the company
     *
     * @var ?PropertyEnrichCompanyAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyEnrichCompanyAddress|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyEnrichCompanyAddress $address = null;

    /**
     *
     * @var ?float $alexaRank
     */
    #[\JMS\Serializer\Annotation\SerializedName('alexa_rank')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $alexaRank = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $crunchbaseUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('crunchbase_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $crunchbaseUrl = null;

    /**
     *
     * @var ?string $description
     */
    #[\JMS\Serializer\Annotation\SerializedName('description')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $description = null;

    /**
     *
     * @var ?string $domain
     */
    #[\JMS\Serializer\Annotation\SerializedName('domain')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $domain = null;

    /**
     *
     * @var ?string $employees
     */
    #[\JMS\Serializer\Annotation\SerializedName('employees')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $employees = null;

    /**
     *
     * @var ?string $exchange
     */
    #[\JMS\Serializer\Annotation\SerializedName('exchange')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $exchange = null;

    /**
     *
     * @var ?string $facebookUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('facebook_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $facebookUrl = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $industry
     */
    #[\JMS\Serializer\Annotation\SerializedName('industry')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $industry = null;

    /**
     *
     * @var ?string $instagramUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('instagram_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $instagramUrl = null;

    /**
     *
     * @var ?string $linkedinUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('linkedin_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $linkedinUrl = null;

    /**
     *
     * @var ?string $logoUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('logo_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $logoUrl = null;

    /**
     *
     * @var ?float $naicsCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('naics_code')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $naicsCode = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The raw data returned by the integration for this company
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $revenue
     */
    #[\JMS\Serializer\Annotation\SerializedName('revenue')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $revenue = null;

    /**
     *
     * @var ?float $sicCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('sic_code')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $sicCode = null;

    /**
     *
     * @var ?string $stock
     */
    #[\JMS\Serializer\Annotation\SerializedName('stock')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $stock = null;

    /**
     * An array of telephones for this company
     *
     * @var ?array<EnrichTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\EnrichTelephone>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

    /**
     *
     * @var ?string $twitterHandle
     */
    #[\JMS\Serializer\Annotation\SerializedName('twitter_handle')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $twitterHandle = null;

    /**
     *
     * @var ?string $twitterUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('twitter_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $twitterUrl = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?float $yearFounded
     */
    #[\JMS\Serializer\Annotation\SerializedName('year_founded')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $yearFounded = null;

    /**
     *
     * @var ?string $yelpUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('yelp_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $yelpUrl = null;

    /**
     *
     * @var ?string $youtubeUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('youtube_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $youtubeUrl = null;

    /**
     * @param  ?PropertyEnrichCompanyAddress  $address
     * @param  ?float  $alexaRank
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $crunchbaseUrl
     * @param  ?string  $description
     * @param  ?string  $domain
     * @param  ?string  $employees
     * @param  ?string  $exchange
     * @param  ?string  $facebookUrl
     * @param  ?string  $id
     * @param  ?string  $industry
     * @param  ?string  $instagramUrl
     * @param  ?string  $linkedinUrl
     * @param  ?string  $logoUrl
     * @param  ?float  $naicsCode
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $revenue
     * @param  ?float  $sicCode
     * @param  ?string  $stock
     * @param  ?array<EnrichTelephone>  $telephones
     * @param  ?string  $twitterHandle
     * @param  ?string  $twitterUrl
     * @param  ?\DateTime  $updatedAt
     * @param  ?float  $yearFounded
     * @param  ?string  $yelpUrl
     * @param  ?string  $youtubeUrl
     */
    public function __construct(?PropertyEnrichCompanyAddress $address = null, ?float $alexaRank = null, ?\DateTime $createdAt = null, ?string $crunchbaseUrl = null, ?string $description = null, ?string $domain = null, ?string $employees = null, ?string $exchange = null, ?string $facebookUrl = null, ?string $id = null, ?string $industry = null, ?string $instagramUrl = null, ?string $linkedinUrl = null, ?string $logoUrl = null, ?float $naicsCode = null, ?string $name = null, ?array $raw = null, ?string $revenue = null, ?float $sicCode = null, ?string $stock = null, ?array $telephones = null, ?string $twitterHandle = null, ?string $twitterUrl = null, ?\DateTime $updatedAt = null, ?float $yearFounded = null, ?string $yelpUrl = null, ?string $youtubeUrl = null)
    {
        $this->address = $address;
        $this->alexaRank = $alexaRank;
        $this->createdAt = $createdAt;
        $this->crunchbaseUrl = $crunchbaseUrl;
        $this->description = $description;
        $this->domain = $domain;
        $this->employees = $employees;
        $this->exchange = $exchange;
        $this->facebookUrl = $facebookUrl;
        $this->id = $id;
        $this->industry = $industry;
        $this->instagramUrl = $instagramUrl;
        $this->linkedinUrl = $linkedinUrl;
        $this->logoUrl = $logoUrl;
        $this->naicsCode = $naicsCode;
        $this->name = $name;
        $this->raw = $raw;
        $this->revenue = $revenue;
        $this->sicCode = $sicCode;
        $this->stock = $stock;
        $this->telephones = $telephones;
        $this->twitterHandle = $twitterHandle;
        $this->twitterUrl = $twitterUrl;
        $this->updatedAt = $updatedAt;
        $this->yearFounded = $yearFounded;
        $this->yelpUrl = $yelpUrl;
        $this->youtubeUrl = $youtubeUrl;
    }
}