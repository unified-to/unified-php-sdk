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
    #[\JMS\Serializer\Annotation\SerializedName('address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyHrisEmployeeAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyHrisEmployeeAddress $address = null;

    /**
     *
     * @var ?string $bio
     */
    #[\JMS\Serializer\Annotation\SerializedName('bio')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $bio = null;

    /**
     *
     * @var ?string $companyId
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyId = null;

    /**
     * $compensation
     *
     * @var ?array<HrisCompensation> $compensation
     */
    #[\JMS\Serializer\Annotation\SerializedName('compensation')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisCompensation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $compensation = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     *
     * @var ?string $currency
     */
    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    /**
     *
     * @var ?\DateTime $dateOfBirth
     */
    #[\JMS\Serializer\Annotation\SerializedName('date_of_birth')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dateOfBirth = null;

    /**
     *
     * @var ?string $department
     */
    #[\JMS\Serializer\Annotation\SerializedName('department')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $department = null;

    /**
     *
     * @var ?string $division
     */
    #[\JMS\Serializer\Annotation\SerializedName('division')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $division = null;

    /**
     * $emails
     *
     * @var ?array<HrisEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;

    /**
     *
     * @var ?string $employeeNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('employee_number')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $employeeNumber = null;

    /**
     * $employeeRoles
     *
     * @var ?array<PropertyHrisEmployeeEmployeeRoles> $employeeRoles
     */
    #[\JMS\Serializer\Annotation\SerializedName('employee_roles')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\PropertyHrisEmployeeEmployeeRoles>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $employeeRoles = null;

    /**
     *
     * @var ?EmploymentStatus $employmentStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\EmploymentStatus')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?EmploymentStatus $employmentStatus = null;

    /**
     *
     * @var ?HrisEmployeeEmploymentType $employmentType
     */
    #[\JMS\Serializer\Annotation\SerializedName('employment_type')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisEmployeeEmploymentType')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisEmployeeEmploymentType $employmentType = null;

    /**
     *
     * @var ?HrisEmployeeGender $gender
     */
    #[\JMS\Serializer\Annotation\SerializedName('gender')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\HrisEmployeeGender')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?HrisEmployeeGender $gender = null;

    /**
     * Which groups/teams/units that this employee/user belongs to.  May not have all of the Group fields present, but should have id, name, or email.
     *
     * @var ?array<HrisGroup> $groups
     */
    #[\JMS\Serializer\Annotation\SerializedName('groups')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisGroup>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $groups = null;

    /**
     *
     * @var ?\DateTime $hiredAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('hired_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $hiredAt = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?string $imageUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('image_url')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $imageUrl = null;

    /**
     *
     * @var ?string $languageLocale
     */
    #[\JMS\Serializer\Annotation\SerializedName('language_locale')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $languageLocale = null;

    /**
     *
     * @var ?string $location
     */
    #[\JMS\Serializer\Annotation\SerializedName('location')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $location = null;

    /**
     * $locations
     *
     * @var ?array<HrisLocation> $locations
     */
    #[\JMS\Serializer\Annotation\SerializedName('locations')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisLocation>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $locations = null;

    /**
     *
     * @var ?string $managerId
     */
    #[\JMS\Serializer\Annotation\SerializedName('manager_id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $managerId = null;

    /**
     *
     * @var ?MaritalStatus $maritalStatus
     */
    #[\JMS\Serializer\Annotation\SerializedName('marital_status')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\MaritalStatus')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?MaritalStatus $maritalStatus = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     *
     * @var ?string $pronouns
     */
    #[\JMS\Serializer\Annotation\SerializedName('pronouns')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $pronouns = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    /**
     *
     * @var ?string $salutation
     */
    #[\JMS\Serializer\Annotation\SerializedName('salutation')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $salutation = null;

    /**
     *
     * @var ?string $ssnSin
     */
    #[\JMS\Serializer\Annotation\SerializedName('ssn_sin')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ssnSin = null;

    /**
     * $telephones
     *
     * @var ?array<HrisTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\HrisTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    /**
     *
     * @var ?\DateTime $terminatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('terminated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $terminatedAt = null;

    /**
     *
     * @var ?string $timezone
     */
    #[\JMS\Serializer\Annotation\SerializedName('timezone')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $timezone = null;

    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $title = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
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
     * @param  ?string  $name
     * @param  ?string  $pronouns
     * @param  ?array<string, mixed>  $raw
     * @param  ?string  $salutation
     * @param  ?string  $ssnSin
     * @param  ?array<HrisTelephone>  $telephones
     * @param  ?\DateTime  $terminatedAt
     * @param  ?string  $timezone
     * @param  ?string  $title
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?PropertyHrisEmployeeAddress $address = null, ?string $bio = null, ?string $companyId = null, ?array $compensation = null, ?\DateTime $createdAt = null, ?string $currency = null, ?\DateTime $dateOfBirth = null, ?string $department = null, ?string $division = null, ?array $emails = null, ?string $employeeNumber = null, ?array $employeeRoles = null, ?EmploymentStatus $employmentStatus = null, ?HrisEmployeeEmploymentType $employmentType = null, ?HrisEmployeeGender $gender = null, ?array $groups = null, ?\DateTime $hiredAt = null, ?string $id = null, ?string $imageUrl = null, ?string $languageLocale = null, ?string $location = null, ?array $locations = null, ?string $managerId = null, ?MaritalStatus $maritalStatus = null, ?string $name = null, ?string $pronouns = null, ?array $raw = null, ?string $salutation = null, ?string $ssnSin = null, ?array $telephones = null, ?\DateTime $terminatedAt = null, ?string $timezone = null, ?string $title = null, ?\DateTime $updatedAt = null)
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
        $this->name = $name;
        $this->pronouns = $pronouns;
        $this->raw = $raw;
        $this->salutation = $salutation;
        $this->ssnSin = $ssnSin;
        $this->telephones = $telephones;
        $this->terminatedAt = $terminatedAt;
        $this->timezone = $timezone;
        $this->title = $title;
        $this->updatedAt = $updatedAt;
    }
}