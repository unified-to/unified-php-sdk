<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingOrganization
{
    /**
     *
     * @var ?PropertyAccountingOrganizationAddress $address
     */
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingOrganizationAddress|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAccountingOrganizationAddress $address = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?float $fiscalYearEndMonth
     */
    #[\JMS\Serializer\Annotation\SerializedName('fiscal_year_end_month')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?float $fiscalYearEndMonth = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     *
     * @var ?string $legalName
     */
    #[\JMS\Serializer\Annotation\SerializedName('legal_name')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $legalName = null;

    /**
     *
     * @var string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     *
     * @var ?string $organizationCode
     */
    #[\JMS\Serializer\Annotation\SerializedName('organization_code')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $organizationCode = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?array $raw = null;

    /**
     *
     * @var ?string $taxNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_number')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $taxNumber = null;

    /**
     *
     * @var ?string $timezone
     */
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $timezone = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     *
     * @var ?string $website
     */
    #[\JMS\Serializer\Annotation\SerializedName('website')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $website = null;

    /**
     * @param  string  $name
     * @param  ?PropertyAccountingOrganizationAddress  $address
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?float  $fiscalYearEndMonth
     * @param  ?string  $id
     * @param  ?string  $legalName
     * @param  ?string  $organizationCode
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $taxNumber
     * @param  ?string  $timezone
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $website
     */
    public function __construct(string $name, ?PropertyAccountingOrganizationAddress $address = null, ?\DateTime $createdAt = null, ?string $currency = null, ?float $fiscalYearEndMonth = null, ?string $id = null, ?string $legalName = null, ?string $organizationCode = null, ?array $raw = null, ?string $taxNumber = null, ?string $timezone = null, ?\DateTime $updatedAt = null, ?string $website = null)
    {
        $this->name = $name;
        $this->address = $address;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->fiscalYearEndMonth = $fiscalYearEndMonth;
        $this->id = $id;
        $this->legalName = $legalName;
        $this->organizationCode = $organizationCode;
        $this->raw = $raw;
        $this->taxNumber = $taxNumber;
        $this->timezone = $timezone;
        $this->updatedAt = $updatedAt;
        $this->website = $website;
    }
}