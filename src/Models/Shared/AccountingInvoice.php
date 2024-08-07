<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Unified\Unified_to\Models\Shared;


class AccountingInvoice
{
    #[\JMS\Serializer\Annotation\SerializedName('balance_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $balanceAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('cancelled_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $cancelledAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('contact_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $contactId = null;

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('currency')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $currency = null;

    #[\JMS\Serializer\Annotation\SerializedName('discount_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $discountAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('due_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $dueAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $id = null;

    #[\JMS\Serializer\Annotation\SerializedName('invoice_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $invoiceNumber = null;

    /**
     * $lineitems
     *
     * @var ?array<\Unified\Unified_to\Models\Shared\AccountingLineitem> $lineitems
     */
    #[\JMS\Serializer\Annotation\SerializedName('lineitems')]
    #[\JMS\Serializer\Annotation\Type('array<Unified\Unified_to\Models\Shared\AccountingLineitem>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $lineitems = null;

    #[\JMS\Serializer\Annotation\SerializedName('notes')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $notes = null;

    #[\JMS\Serializer\Annotation\SerializedName('paid_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $paidAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('paid_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $paidAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('payment_collection_method')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\PaymentCollectionMethod>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?PaymentCollectionMethod $paymentCollectionMethod = null;

    /**
     * $raw
     *
     * @var ?array<string, mixed> $raw
     */
    #[\JMS\Serializer\Annotation\SerializedName('raw')]
    #[\JMS\Serializer\Annotation\Type('array<string, mixed>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?array $raw = null;

    #[\JMS\Serializer\Annotation\SerializedName('refund_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $refundAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('refund_reason')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $refundReason = null;

    #[\JMS\Serializer\Annotation\SerializedName('refunded_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $refundedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Unified\Unified_to\Models\Shared\AccountingInvoiceStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?AccountingInvoiceStatus $status = null;

    #[\JMS\Serializer\Annotation\SerializedName('tax_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $taxAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('total_amount')]
    #[\JMS\Serializer\Annotation\Type('float')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?float $totalAmount = null;

    #[\JMS\Serializer\Annotation\SerializedName('updated_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $updatedAt = null;

    #[\JMS\Serializer\Annotation\SerializedName('url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $url = null;

    public function __construct()
    {
        $this->balanceAmount = null;
        $this->cancelledAt = null;
        $this->contactId = null;
        $this->createdAt = null;
        $this->currency = null;
        $this->discountAmount = null;
        $this->dueAt = null;
        $this->id = null;
        $this->invoiceNumber = null;
        $this->lineitems = null;
        $this->notes = null;
        $this->paidAmount = null;
        $this->paidAt = null;
        $this->paymentCollectionMethod = null;
        $this->raw = null;
        $this->refundAmount = null;
        $this->refundReason = null;
        $this->refundedAt = null;
        $this->status = null;
        $this->taxAmount = null;
        $this->totalAmount = null;
        $this->updatedAt = null;
        $this->url = null;
    }
}