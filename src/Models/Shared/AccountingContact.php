<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingContact
{
    /**
     *
     * @var ?PropertyAccountingContactBillingAddress $billingAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('billing_address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingContactBillingAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAccountingContactBillingAddress $billingAddress = null;

    /**
     *
     * @var ?string $companyName
     */
    #[\JMS\Serializer\Annotation\SerializedName('company_name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $companyName = null;

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
     * $emails
     *
     * @var ?array<AccountingEmail> $emails
     */
    #[\JMS\Serializer\Annotation\SerializedName('emails')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingEmail>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $emails = null;

    /**
     *
     * @var ?string $id
     */
    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    /**
     *
     * @var ?string $identification
     */
    #[\JMS\Serializer\Annotation\SerializedName('identification')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $identification = null;

    /**
     *
     * @var ?bool $isActive
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_active')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isActive = null;

    /**
     *
     * @var ?bool $isCustomer
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_customer')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isCustomer = null;

    /**
     *
     * @var ?bool $isSupplier
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_supplier')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isSupplier = null;

    /**
     *
     * @var ?string $name
     */
    #[\JMS\Serializer\Annotation\SerializedName('name')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $name = null;

    /**
     * $paymentMethods
     *
     * @var ?array<AccountingContactPaymentMethod> $paymentMethods
     */
    #[\JMS\Serializer\Annotation\SerializedName('payment_methods')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingContactPaymentMethod>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $paymentMethods = null;

    /**
     *
     * @var ?string $portalUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('portal_url')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $portalUrl = null;

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
     * @var ?PropertyAccountingContactShippingAddress $shippingAddress
     */
    #[\JMS\Serializer\Annotation\SerializedName('shipping_address')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingContactShippingAddress')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PropertyAccountingContactShippingAddress $shippingAddress = null;

    /**
     *
     * @var ?TaxExemption $taxExemption
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_exemption')]
    #[\JMS\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\TaxExemption')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?TaxExemption $taxExemption = null;

    /**
     *
     * @var ?string $taxNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('tax_number')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $taxNumber = null;

    /**
     * $telephones
     *
     * @var ?array<AccountingTelephone> $telephones
     */
    #[\JMS\Serializer\Annotation\SerializedName('telephones')]
    #[\JMS\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingTelephone>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $telephones = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?PropertyAccountingContactBillingAddress  $billingAddress
     * @param  ?string  $companyName
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?array<AccountingEmail>  $emails
     * @param  ?string  $id
     * @param  ?string  $identification
     * @param  ?bool  $isActive
     * @param  ?bool  $isCustomer
     * @param  ?bool  $isSupplier
     * @param  ?string  $name
     * @param  ?array<AccountingContactPaymentMethod>  $paymentMethods
     * @param  ?string  $portalUrl
     * @param  ?array<string, mixed>  $raw
     * @param  ?PropertyAccountingContactShippingAddress  $shippingAddress
     * @param  ?TaxExemption  $taxExemption
     * @param  ?string  $taxNumber
     * @param  ?array<AccountingTelephone>  $telephones
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?PropertyAccountingContactBillingAddress $billingAddress = null, ?string $companyName = null, ?\DateTime $createdAt = null, ?string $currency = null, ?array $emails = null, ?string $id = null, ?string $identification = null, ?bool $isActive = null, ?bool $isCustomer = null, ?bool $isSupplier = null, ?string $name = null, ?array $paymentMethods = null, ?string $portalUrl = null, ?array $raw = null, ?PropertyAccountingContactShippingAddress $shippingAddress = null, ?TaxExemption $taxExemption = null, ?string $taxNumber = null, ?array $telephones = null, ?\DateTime $updatedAt = null)
    {
        $this->billingAddress = $billingAddress;
        $this->companyName = $companyName;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->emails = $emails;
        $this->id = $id;
        $this->identification = $identification;
        $this->isActive = $isActive;
        $this->isCustomer = $isCustomer;
        $this->isSupplier = $isSupplier;
        $this->name = $name;
        $this->paymentMethods = $paymentMethods;
        $this->portalUrl = $portalUrl;
        $this->raw = $raw;
        $this->shippingAddress = $shippingAddress;
        $this->taxExemption = $taxExemption;
        $this->taxNumber = $taxNumber;
        $this->telephones = $telephones;
        $this->updatedAt = $updatedAt;
    }
}