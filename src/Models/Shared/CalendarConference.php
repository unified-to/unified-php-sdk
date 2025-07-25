<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class CalendarConference
{
    /**
     *
     * @var ?string $conferenceIdentifier
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conference_identifier')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $conferenceIdentifier = null;

    /**
     *
     * @var ?string $countryCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('country_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $countryCode = null;

    /**
     *
     * @var ?string $hostAccessCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('host_access_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $hostAccessCode = null;

    /**
     *
     * @var ?string $label
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('label')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $label = null;

    /**
     *
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?string $participantAccessCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('participant_access_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $participantAccessCode = null;

    /**
     *
     * @var ?string $regionCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('region_code')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $regionCode = null;

    /**
     *
     * @var ?string $telephone
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telephone')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $telephone = null;

    /**
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?string  $conferenceIdentifier
     * @param  ?string  $countryCode
     * @param  ?string  $hostAccessCode
     * @param  ?string  $label
     * @param  ?string  $notes
     * @param  ?string  $participantAccessCode
     * @param  ?string  $regionCode
     * @param  ?string  $telephone
     * @param  ?string  $url
     * @phpstan-pure
     */
    public function __construct(?string $conferenceIdentifier = null, ?string $countryCode = null, ?string $hostAccessCode = null, ?string $label = null, ?string $notes = null, ?string $participantAccessCode = null, ?string $regionCode = null, ?string $telephone = null, ?string $url = null)
    {
        $this->conferenceIdentifier = $conferenceIdentifier;
        $this->countryCode = $countryCode;
        $this->hostAccessCode = $hostAccessCode;
        $this->label = $label;
        $this->notes = $notes;
        $this->participantAccessCode = $participantAccessCode;
        $this->regionCode = $regionCode;
        $this->telephone = $telephone;
        $this->url = $url;
    }
}