<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class HrisEmployee
{
    /**
     *
     * @var ?PropertyHrisEmployeeAddress $address
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyHrisEmployeeAddress $address = null;

    /**
     *
     * @var ?string $bio
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('bio')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $bio = null;

    /**
     *
     * @var ?string $companyId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('company_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $companyId = null;

    /**
     * $compensation
     *
     * @var ?array<HrisCompensation> $compensation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('compensation')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisCompensation>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $compensation = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?\DateTime $dateOfBirth
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('date_of_birth')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dateOfBirth = null;

    /**
     *
     * @var ?string $department
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('department')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $department = null;

    /**
     *
     * @var ?string $division
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('division')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $division = null;

    /**
     * $emails
     *
     * @var ?array<HrisEmail> $emails
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('emails')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisEmail>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $emails = null;

    /**
     *
     * @var ?string $employeeNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $employeeNumber = null;

    /**
     * $employeeRoles
     *
     * @var ?array<PropertyHrisEmployeeEmployeeRoles> $employeeRoles
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employee_roles')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\PropertyHrisEmployeeEmployeeRoles>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $employeeRoles = null;

    /**
     *
     * @var ?EmploymentStatus $employmentStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\EmploymentStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?EmploymentStatus $employmentStatus = null;

    /**
     *
     * @var ?HrisEmployeeEmploymentType $employmentType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('employment_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisEmployeeEmploymentType $employmentType = null;

    /**
     *
     * @var ?HrisEmployeeGender $gender
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('gender')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisEmployeeGender|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?HrisEmployeeGender $gender = null;

    /**
     * Which groups/teams/units that this employee/user belongs to.  May not have all of the Group fields present, but should have id, name, or email.
     *
     * @var ?array<HrisGroup> $groups
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('groups')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisGroup>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $groups = null;

    /**
     *
     * @var ?\DateTime $hiredAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('hired_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $hiredAt = null;

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
     * @var ?string $languageLocale
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('language_locale')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $languageLocale = null;

    /**
     *
     * @var ?string $location
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('location')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $location = null;

    /**
     * $locations
     *
     * @var ?array<HrisLocation> $locations
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('locations')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisLocation>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $locations = null;

    /**
     *
     * @var ?string $managerId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('manager_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $managerId = null;

    /**
     *
     * @var ?MaritalStatus $maritalStatus
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('marital_status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\MaritalStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?MaritalStatus $maritalStatus = null;

    /**
     * $metadata
     *
     * @var ?array<HrisMetadata> $metadata
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('metadata')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisMetadata>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $metadata = null;

    /**
     *
     * @var ?string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $name = null;

    /**
     *
     * @var ?string $pronouns
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('pronouns')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $pronouns = null;

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
     * @var ?string $salutation
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salutation')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $salutation = null;

    /**
     *
     * @var ?string $ssnSin
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('ssn_sin')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $ssnSin = null;

    /**
     *
     * @var ?float $storageQuotaAllocated
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('storage_quota_allocated')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $storageQuotaAllocated = null;

    /**
     *
     * @var ?float $storageQuotaAvailable
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('storage_quota_available')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $storageQuotaAvailable = null;

    /**
     *
     * @var ?float $storageQuotaUsed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('storage_quota_used')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $storageQuotaUsed = null;

    /**
     * $telephones
     *
     * @var ?array<HrisTelephone> $telephones
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('telephones')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisTelephone>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $telephones = null;

    /**
     *
     * @var ?\DateTime $terminatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('terminated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $terminatedAt = null;

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
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?PropertyHrisEmployeeAddress  $address
     * @param  ?string  $bio
     * @param  ?string  $companyId
     * @param  ?array<HrisCompensation>  $compensation
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?\DateTime  $dateOfBirth
     * @param  ?string  $department
     * @param  ?string  $division
     * @param  ?array<HrisEmail>  $emails
     * @param  ?string  $employeeNumber
     * @param  ?array<PropertyHrisEmployeeEmployeeRoles>  $employeeRoles
     * @param  ?EmploymentStatus  $employmentStatus
     * @param  ?HrisEmployeeEmploymentType  $employmentType
     * @param  ?HrisEmployeeGender  $gender
     * @param  ?array<HrisGroup>  $groups
     * @param  ?\DateTime  $hiredAt
     * @param  ?string  $id
     * @param  ?string  $imageUrl
     * @param  ?string  $languageLocale
     * @param  ?string  $location
     * @param  ?array<HrisLocation>  $locations
     * @param  ?string  $managerId
     * @param  ?MaritalStatus  $maritalStatus
     * @param  ?array<HrisMetadata>  $metadata
     * @param  ?string  $name
     * @param  ?string  $pronouns
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $salutation
     * @param  ?string  $ssnSin
     * @param  ?float  $storageQuotaAllocated
     * @param  ?float  $storageQuotaAvailable
     * @param  ?float  $storageQuotaUsed
     * @param  ?array<HrisTelephone>  $telephones
     * @param  ?\DateTime  $terminatedAt
     * @param  ?string  $timezone
     * @param  ?string  $title
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?PropertyHrisEmployeeAddress $address = null, ?string $bio = null, ?string $companyId = null, ?array $compensation = null, ?\DateTime $createdAt = null, ?string $currency = null, ?\DateTime $dateOfBirth = null, ?string $department = null, ?string $division = null, ?array $emails = null, ?string $employeeNumber = null, ?array $employeeRoles = null, ?EmploymentStatus $employmentStatus = null, ?HrisEmployeeEmploymentType $employmentType = null, ?HrisEmployeeGender $gender = null, ?array $groups = null, ?\DateTime $hiredAt = null, ?string $id = null, ?string $imageUrl = null, ?string $languageLocale = null, ?string $location = null, ?array $locations = null, ?string $managerId = null, ?MaritalStatus $maritalStatus = null, ?array $metadata = null, ?string $name = null, ?string $pronouns = null, ?array $raw = null, ?string $salutation = null, ?string $ssnSin = null, ?float $storageQuotaAllocated = null, ?float $storageQuotaAvailable = null, ?float $storageQuotaUsed = null, ?array $telephones = null, ?\DateTime $terminatedAt = null, ?string $timezone = null, ?string $title = null, ?\DateTime $updatedAt = null)
    {
        $this->address = $address;
        $this->bio = $bio;
        $this->companyId = $companyId;
        $this->compensation = $compensation;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->dateOfBirth = $dateOfBirth;
        $this->department = $department;
        $this->division = $division;
        $this->emails = $emails;
        $this->employeeNumber = $employeeNumber;
        $this->employeeRoles = $employeeRoles;
        $this->employmentStatus = $employmentStatus;
        $this->employmentType = $employmentType;
        $this->gender = $gender;
        $this->groups = $groups;
        $this->hiredAt = $hiredAt;
        $this->id = $id;
        $this->imageUrl = $imageUrl;
        $this->languageLocale = $languageLocale;
        $this->location = $location;
        $this->locations = $locations;
        $this->managerId = $managerId;
        $this->maritalStatus = $maritalStatus;
        $this->metadata = $metadata;
        $this->name = $name;
        $this->pronouns = $pronouns;
        $this->raw = $raw;
        $this->salutation = $salutation;
        $this->ssnSin = $ssnSin;
        $this->storageQuotaAllocated = $storageQuotaAllocated;
        $this->storageQuotaAvailable = $storageQuotaAvailable;
        $this->storageQuotaUsed = $storageQuotaUsed;
        $this->telephones = $telephones;
        $this->terminatedAt = $terminatedAt;
        $this->timezone = $timezone;
        $this->title = $title;
        $this->updatedAt = $updatedAt;
    }
}