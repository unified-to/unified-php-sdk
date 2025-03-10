<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** EnrichPerson - A person object from an enrichment integration */
class EnrichPerson
{
    /**
     * The address of the person
     *
     * @var ?PropertyEnrichPersonAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyEnrichPersonAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyEnrichPersonAddress $address = null;

    /**
     *
     * @var ?string $bio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $bio = null;

    /**
     *
     * @var ?string $birthdate
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('birthdate')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $birthdate = null;

    /**
     *
     * @var ?string $company
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $company = null;

    /**
     *
     * @var ?string $companyDomain
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_domain')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyDomain = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of email addresses for this person
     *
     * @var ?array<EnrichEmail> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\EnrichEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?string $facebookUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('facebook_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $facebookUrl = null;

    /**
     *
     * @var ?Gender $gender
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gender')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\Gender|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?Gender $gender = null;

    /**
     *
     * @var ?string $githubUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('github_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $githubUrl = null;

    /**
     *
     * @var ?string $githubUsername
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('github_username')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $githubUsername = null;

    /**
     *
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $imageUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('image_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $imageUrl = null;

    /**
     *
     * @var ?string $linkedinUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('linkedin_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $linkedinUrl = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The raw data returned by the integration for this person
     *
     * @var ?array<string, mixed> $raw
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('raw')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * An array of telephones for this person
     *
     * @var ?array<EnrichTelephone> $telephones
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telephones')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\EnrichTelephone>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

    /**
     *
     * @var ?string $timezone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('timezone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $timezone = null;

    /**
     *
     * @var ?string $title
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('title')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $twitterHandle
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('twitter_handle')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $twitterHandle = null;

    /**
     *
     * @var ?string $twitterUrl
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('twitter_url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $twitterUrl = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?float $utcOffset
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('utc_offset')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $utcOffset = null;

    /**
     * $workHistories
     *
     * @var ?array<EnrichPersonWorkHistory> $workHistories
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('work_histories')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\EnrichPersonWorkHistory>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $workHistories = null;

    /**
     * @param  ?PropertyEnrichPersonAddress  $address
     * @param  ?string  $bio
     * @param  ?string  $birthdate
     * @param  ?string  $company
     * @param  ?string  $companyDomain
     * @param  ?\DateTime  $createdAt
     * @param  ?array<EnrichEmail>  $emails
     * @param  ?string  $facebookUrl
     * @param  ?Gender  $gender
     * @param  ?string  $githubUrl
     * @param  ?string  $githubUsername
     * @param  ?string  $id
     * @param  ?string  $imageUrl
     * @param  ?string  $linkedinUrl
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<EnrichTelephone>  $telephones
     * @param  ?string  $timezone
     * @param  ?string  $title
     * @param  ?string  $twitterHandle
     * @param  ?string  $twitterUrl
     * @param  ?\DateTime  $updatedAt
     * @param  ?float  $utcOffset
     * @param  ?array<EnrichPersonWorkHistory>  $workHistories
     * @phpstan-pure
     */
    public function __construct(?PropertyEnrichPersonAddress $address = null, ?string $bio = null, ?string $birthdate = null, ?string $company = null, ?string $companyDomain = null, ?\DateTime $createdAt = null, ?array $emails = null, ?string $facebookUrl = null, ?Gender $gender = null, ?string $githubUrl = null, ?string $githubUsername = null, ?string $id = null, ?string $imageUrl = null, ?string $linkedinUrl = null, ?string $name = null, ?array $raw = null, ?array $telephones = null, ?string $timezone = null, ?string $title = null, ?string $twitterHandle = null, ?string $twitterUrl = null, ?\DateTime $updatedAt = null, ?float $utcOffset = null, ?array $workHistories = null)
    {
        $this->address = $address;
        $this->bio = $bio;
        $this->birthdate = $birthdate;
        $this->company = $company;
        $this->companyDomain = $companyDomain;
        $this->createdAt = $createdAt;
        $this->emails = $emails;
        $this->facebookUrl = $facebookUrl;
        $this->gender = $gender;
        $this->githubUrl = $githubUrl;
        $this->githubUsername = $githubUsername;
        $this->id = $id;
        $this->imageUrl = $imageUrl;
        $this->linkedinUrl = $linkedinUrl;
        $this->name = $name;
        $this->raw = $raw;
        $this->telephones = $telephones;
        $this->timezone = $timezone;
        $this->title = $title;
        $this->twitterHandle = $twitterHandle;
        $this->twitterUrl = $twitterUrl;
        $this->updatedAt = $updatedAt;
        $this->utcOffset = $utcOffset;
        $this->workHistories = $workHistories;
    }
}