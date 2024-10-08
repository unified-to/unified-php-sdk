<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


/** UcContact - A contact represents a person that optionally is associated with a call */
class UcContact
{
    /**
     *
     * @var ?string $company
     */
    #[\JMS\Serializer\Annotation\SerializedName('company')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $company = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * An array of email addresses for this contact
     *
     * @var ?array<UcEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\UcEmail>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     * The raw data returned by the integration for this contact
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     * An array of telephones for this contact
     *
     * @var ?array<UcTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\UcTelephone>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $company
     * @param  ?\DateTime  $createdAt
     * @param  ?array<UcEmail>  $emails
     * @param  ?string  $id
     * @param  ?string  $name
     * @param  ?array<string, mixed>  $raw
     * @param  ?array<UcTelephone>  $telephones
     * @param  ?string  $title
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $company = null, ?\DateTime $createdAt = null, ?array $emails = null, ?string $id = null, ?string $name = null, ?array $raw = null, ?array $telephones = null, ?string $title = null, ?\DateTime $updatedAt = null)
    {
        $this->company = $company;
        $this->createdAt = $createdAt;
        $this->emails = $emails;
        $this->id = $id;
        $this->name = $name;
        $this->raw = $raw;
        $this->telephones = $telephones;
        $this->title = $title;
        $this->updatedAt = $updatedAt;
    }
}