<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingPurchaseorder
{
    /**
     *
     * @var ?string $accountId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('account_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $accountId = null;

    /**
     *
     * @var ?PropertyAccountingPurchaseorderBillingAddress $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingPurchaseorderBillingAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAccountingPurchaseorderBillingAddress $billingAddress = null;

    /**
     *
     * @var ?string $contactId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('contact_id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $contactId = null;

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
     * @var ?string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $id = null;

    /**
     * $lineitems
     *
     * @var ?array<AccountingLineitem> $lineitems
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('lineitems')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingLineitem>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $lineitems = null;

    /**
     *
     * @var ?\DateTime $postedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('posted_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $postedAt = null;

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
     * @var ?PropertyAccountingPurchaseorderShippingAddress $shippingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipping_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingPurchaseorderShippingAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAccountingPurchaseorderShippingAddress $shippingAddress = null;

    /**
     *
     * @var ?AccountingPurchaseorderStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingPurchaseorderStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountingPurchaseorderStatus $status = null;

    /**
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $accountId
     * @param  ?PropertyAccountingPurchaseorderBillingAddress  $billingAddress
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $id
     * @param  ?array<AccountingLineitem>  $lineitems
     * @param  ?\DateTime  $postedAt
     * @param  ?array<string, mixed>  $raw
     * @param  ?PropertyAccountingPurchaseorderShippingAddress  $shippingAddress
     * @param  ?AccountingPurchaseorderStatus  $status
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $updatedAt
     * @phpstan-pure
     */
    public function __construct(?string $accountId = null, ?PropertyAccountingPurchaseorderBillingAddress $billingAddress = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $currency = null, ?string $id = null, ?array $lineitems = null, ?\DateTime $postedAt = null, ?array $raw = null, ?PropertyAccountingPurchaseorderShippingAddress $shippingAddress = null, ?AccountingPurchaseorderStatus $status = null, ?float $totalAmount = null, ?\DateTime $updatedAt = null)
    {
        $this->accountId = $accountId;
        $this->billingAddress = $billingAddress;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->id = $id;
        $this->lineitems = $lineitems;
        $this->postedAt = $postedAt;
        $this->raw = $raw;
        $this->shippingAddress = $shippingAddress;
        $this->status = $status;
        $this->totalAmount = $totalAmount;
        $this->updatedAt = $updatedAt;
    }
}