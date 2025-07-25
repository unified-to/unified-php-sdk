<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingCreditmemo
{
    /**
     * $attachments
     *
     * @var ?array<AccountingAttachment> $attachments
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('attachments')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Unified\Unified_to\Models\Shared\AccountingAttachment>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $attachments = null;

    /**
     *
     * @var ?float $balanceAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $balanceAmount = null;

    /**
     *
     * @var ?\DateTime $cancelledAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('cancelled_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $cancelledAt = null;

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
     * @var ?string $creditmemoNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('creditmemo_number')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $creditmemoNumber = null;

    /**
     *
     * @var ?string $currency
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('currency')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $currency = null;

    /**
     *
     * @var ?float $discountAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('discount_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $discountAmount = null;

    /**
     *
     * @var ?\DateTime $dueAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('due_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $dueAt = null;

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
     * @var ?string $notes
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('notes')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $notes = null;

    /**
     *
     * @var ?float $paidAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paid_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $paidAmount = null;

    /**
     *
     * @var ?\DateTime $paidAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paid_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $paidAt = null;

    /**
     *
     * @var ?AccountingCreditmemoPaymentCollectionMethod $paymentCollectionMethod
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('payment_collection_method')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingCreditmemoPaymentCollectionMethod|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountingCreditmemoPaymentCollectionMethod $paymentCollectionMethod = null;

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
     * @var ?float $refundAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refund_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $refundAmount = null;

    /**
     *
     * @var ?string $refundReason
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refund_reason')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $refundReason = null;

    /**
     *
     * @var ?\DateTime $refundedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('refunded_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $refundedAt = null;

    /**
     *
     * @var ?bool $send
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('send')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?bool $send = null;

    /**
     *
     * @var ?AccountingCreditmemoStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Unified\Unified_to\Models\Shared\AccountingCreditmemoStatus|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AccountingCreditmemoStatus $status = null;

    /**
     *
     * @var ?float $taxAmount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tax_amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $taxAmount = null;

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
     *
     * @var ?string $url
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('url')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $url = null;

    /**
     * @param  ?array<AccountingAttachment>  $attachments
     * @param  ?float  $balanceAmount
     * @param  ?\DateTime  $cancelledAt
     * @param  ?string  $contactId
     * @param  ?\DateTime  $createdAt
     * @param  ?string  $creditmemoNumber
     * @param  ?string  $currency
     * @param  ?float  $discountAmount
     * @param  ?\DateTime  $dueAt
     * @param  ?string  $id
     * @param  ?array<AccountingLineitem>  $lineitems
     * @param  ?string  $notes
     * @param  ?float  $paidAmount
     * @param  ?\DateTime  $paidAt
     * @param  ?AccountingCreditmemoPaymentCollectionMethod  $paymentCollectionMethod
     * @param  ?\DateTime  $postedAt
     * @param  ?array<string, mixed>  $raw
     * @param  ?float  $refundAmount
     * @param  ?string  $refundReason
     * @param  ?\DateTime  $refundedAt
     * @param  ?bool  $send
     * @param  ?AccountingCreditmemoStatus  $status
     * @param  ?float  $taxAmount
     * @param  ?float  $totalAmount
     * @param  ?\DateTime  $updatedAt
     * @param  ?string  $url
     * @phpstan-pure
     */
    public function __construct(?array $attachments = null, ?float $balanceAmount = null, ?\DateTime $cancelledAt = null, ?string $contactId = null, ?\DateTime $createdAt = null, ?string $creditmemoNumber = null, ?string $currency = null, ?float $discountAmount = null, ?\DateTime $dueAt = null, ?string $id = null, ?array $lineitems = null, ?string $notes = null, ?float $paidAmount = null, ?\DateTime $paidAt = null, ?AccountingCreditmemoPaymentCollectionMethod $paymentCollectionMethod = null, ?\DateTime $postedAt = null, ?array $raw = null, ?float $refundAmount = null, ?string $refundReason = null, ?\DateTime $refundedAt = null, ?bool $send = null, ?AccountingCreditmemoStatus $status = null, ?float $taxAmount = null, ?float $totalAmount = null, ?\DateTime $updatedAt = null, ?string $url = null)
    {
        $this->attachments = $attachments;
        $this->balanceAmount = $balanceAmount;
        $this->cancelledAt = $cancelledAt;
        $this->contactId = $contactId;
        $this->createdAt = $createdAt;
        $this->creditmemoNumber = $creditmemoNumber;
        $this->currency = $currency;
        $this->discountAmount = $discountAmount;
        $this->dueAt = $dueAt;
        $this->id = $id;
        $this->lineitems = $lineitems;
        $this->notes = $notes;
        $this->paidAmount = $paidAmount;
        $this->paidAt = $paidAt;
        $this->paymentCollectionMethod = $paymentCollectionMethod;
        $this->postedAt = $postedAt;
        $this->raw = $raw;
        $this->refundAmount = $refundAmount;
        $this->refundReason = $refundReason;
        $this->refundedAt = $refundedAt;
        $this->send = $send;
        $this->status = $status;
        $this->taxAmount = $taxAmount;
        $this->totalAmount = $totalAmount;
        $this->updatedAt = $updatedAt;
        $this->url = $url;
    }
}