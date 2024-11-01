<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingOrder
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
     * @var ?PropertyAccountingOrderBillingAddress $billingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billing_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingOrderBillingAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAccountingOrderBillingAddress $billingAddress = null;

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
     * @var ?PropertyAccountingOrderShippingAddress $shippingAddress
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('shipping_address')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\PropertyAccountingOrderShippingAddress|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?PropertyAccountingOrderShippingAddress $shippingAddress = null;

    /**
     *
     * @var ?AccountingOrderStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingOrderStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountingOrderStatus $status = null;

    /**
     *
     * @var ?float $totalAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('total_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $totalAmount = null;

    /**
     *
     * @var ?AccountingOrderType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingOrderType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountingOrderType $type = null;

    /**
     *
     * @var ?\DateTime $updatedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('updated_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $updatedAt = null;

    /**
     * @param  ?string  $accountId
     * @param  ?PropertyAccountingOrderBillingAddress  $billingAddress
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $currency
     * @param  ?string  $id
     * @param  ?array<AccountingLineitem>  $lineitems
     * @param  ?array<string, mixed>  $raw
     * @param  ?PropertyAccountingOrderShippingAddress  $shippingAddress
     * @param  ?AccountingOrderStatus  $status
     * @param  ?float  $totalAmount
     * @param  ?AccountingOrderType  $type
     * @param  ?\DateTime  $updatedAt
     */
    public function __construct(?string $accountId = null, ?PropertyAccountingOrderBillingAddress $billingAddress = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $currency = null, ?string $id = null, ?array $lineitems = null, ?array $raw = null, ?PropertyAccountingOrderShippingAddress $shippingAddress = null, ?AccountingOrderStatus $status = null, ?float $totalAmount = null, ?AccountingOrderType $type = null, ?\DateTime $updatedAt = null)
    {
        $this->accountId = $accountId;
        $this->billingAddress = $billingAddress;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->currency = $currency;
        $this->id = $id;
        $this->lineitems = $lineitems;
        $this->raw = $raw;
        $this->shippingAddress = $shippingAddress;
        $this->status = $status;
        $this->totalAmount = $totalAmount;
        $this->type = $type;
        $this->updatedAt = $updatedAt;
    }
}